<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>

<header>
    <!-- Header Start -->
    <div class="header-area ">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="header-left d-flex align-items-center">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>"><?= $this->Html->image('logo/logo.png') ?></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>">Home</a></li>
                                    <li><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'shop']); ?>">shop</a></li>
                                    <li><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'sustainability']); ?>">About us</a></li>
                                    <li><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'findprofessionals']); ?>" style="color: #509F94">Find Craftsman</a></li>

                                    <?php $uid = $this->request->getSession()->read('Auth.id');
                                            //debug($uid);
                                            if(isset($uid)): ?>
                                                <?php if(isset($welcomeMsg)): ?>
                                                <li><p style="font-family: Poppins, sans-serif; position: fixed; top: 40px; right: 70px"><?= $welcomeMsg ?></p></li>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <li  style="position: fixed; top: auto; right: 20px"><a href="<?= $this->Url->build(['controller' => 'users', 'action'=>'login']); ?>"><i class="fas fa-user"></i></a>
                                                <ul class="submenu" style="left:-200%">

                                                    <?php if(isset($uid)): ?>
                                                    <?php
                                                        $type = $this->request->getSession()->read('Auth.type');
//                                                        $linkByUser = "";
//
//                                                        if ($type == 'Seller') {
//                                                            $linkByUser = $this->Url->build(['controller' => 'sellers','action'=>'edit']);
//                                                        }
//                                                        else if($type == 'Buyer'){
//                                                            $linkByUser =  $this->Url->build(['controller' => 'buyers','action'=>'edit']);
//                                                        }
//                                                        else if($type == 'Builder'){
//                                                            $linkByUser =  $this->Url->build(['controller' => 'builders','action'=>'edit']);
//                                                        }

//                                                        debug($linkByUser);
                                                        if($type!='Admin'){
                                                        ?>

                                                        <li><a href="<?= $this->Url->build(['controller' => "$type", 'action' => 'edit']) ?>">Dashboard</a></li>
                                                        <?php }
                                                        else{ ?>
                                                            <li><a href="<?= $this->Url->build(['controller' => "users", 'action' => 'index']) ?>">Dashboard</a></li>

                                                            <?php
                                                        }
                                                        ?>
                                                        <li><a href= <?= $this->Url->build(['controller' => 'users','action'=>'logout']); ?> >Logout</a></li>
                                                    <?php else: ?>
                                                        <li><a href= <?= $this->Url->build(['controller' => 'users', 'action'=>'login']); ?> >Login</a></li>
                                                        <li><a href= <?= $this->Url->build(['controller' => 'users', 'action'=>'register']); ?> >Register</a></li>
                                                    <?php endif; ?>

                                                </ul>
                                            </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right1 d-flex align-items-center">

                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<!-- header end -->
