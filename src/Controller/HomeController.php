<?php

namespace App\Controller;

use Cake\ORM\TableLocator;

class HomeController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        /*
        $session = $this->request->getSession();
        if ($session->check('Auth.id')) {
            $userid = $session->read('Auth.id');

            $this->redirect(array('controller' => 'home', 'action' => 'index'));
        } else {
            $this->redirect('/');
        }
        */

        $this->Authentication->addUnauthenticatedActions(['sustainability', 'shop', 'productpage', 'findprofessionals']);

        $this->loadModel('Users');

        $result = $this->Authentication->getResult();

        if ($result->isValid())
        {
            //$uid = $this->Auth->user('id');
            $uid = $this->request->getSession()->read('Auth.id');
            //debug($uid);

            $user = $this->Users->find('all', [
                'conditions' => ['Users.id' => $uid],
                'limit' => 1
            ])->first();

            if(isset($user)) {
                $welcomeMsg = "Welcome back, " . $user['username'];
                //debug($welcomeMsg);

                if ($welcomeMsg !== "") {
                    //to display on website
                    $this->set('welcomeMsg', $welcomeMsg);
                }
            }
        }

    }

    public function index()
    {
        $this->viewBuilder()->setLayout('hemporthome');
        $this->loadModel('Product');
        $this -> loadModel('Admins');
        $this ->loadModel('Builder');
        $product = $this->Product->find('all')->limit(4)->all()->toList();
        $builder= $this -> Builder -> find('all')->limit(4)->all()->toList();
        $admin1   = $this->Admins->find('all',['conditions'=>['id'=>1]])->all()->first();
        $admin2   = $this->Admins->find('all',['conditions'=>['id'=>9]])->all()->first();



        $this->set(compact('product','admin1','admin2','builder'));
    }

    public function sustainability()
    {
        $this->viewBuilder()->setLayout('hemportsustainability');
    }

    public function shop()
    {
        $this->viewBuilder()->setLayout('hemportshop');
        $this->loadModel('Product');

        $key = $this->request->getQuery('key');
        if($key)
        {
            $pn = $this->Product->find('all', ['maxLimit' => 10, 'limit'=>100])
                ->where(['name like' => '%'.$key.'%'])->all();
            $product = $pn->toList();
        } else {
            $pn = $this->Product->find('all')->all();
            $product = $pn->toList();
        }

        $this->set(compact('product','pn'));
    }

    public function productpage()
    {
        $this->viewBuilder()->setLayout('hemportshop');

    }

    public function findprofessionals()
    {
        $this->viewBuilder()->setLayout('hemportprofessionals');

        $this->loadModel('Builder');

        $key = $this->request->getQuery('key');
        if($key)
        {
            $query = $this->Builder->find('all', ['maxLimit' => 10, 'limit'=>100])
                ->where(['name like' => '%'.$key.'%']);
        } else {
            $query = $this->Builder->find('all');;
        }

        $this->set('builders', $this->paginate($query,['limit'=>5000]));
        //$this->set('searchcount', $count);
        //$builder = $this->paginate($query);
        $this->set(compact('query'));
    }
}
