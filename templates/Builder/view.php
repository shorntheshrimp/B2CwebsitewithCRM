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

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Builder $builder
 */
?>

<!doctype html>
<html lang="zxx">
<main>

    <!-- breadcrumb Start-->
    <div class="page-notification">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'findprofessionals']); ?>">Find Professionals</a></li>
                            <li class="breadcrumb-item"><a href="#">View Profile</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End-->


    <?php echo $this->Flash->render(); ?>
    <br>

    <!-- Contact Start -->
    <div>
        <div style="display: flex; flex-wrap: nowrap; margin-right: -0.75rem; margin-left: -0.75rem; flex-direction: row">

            <!--left col-->
            <div class="col-md-8 mb-5" style="padding-right: 80px;">
                <!-- slide start-->
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <?php
                        $count=0;
                        foreach ($projects as $p):
                            ?>
                            <?php
                            if($p['image_1']!= null){
                                ?>
                                <div class="carousel-item <?php echo $count==0?'active':'' ?>" style="height: 410px;">

                                    <?php
                                    echo $this->Html->image($p['image_1'],['class'=>'d-block mx-auto','style'=>'height:100%']); ?>
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    </div>
                                </div>
                                <?php
                                $count++;
                            }
                            ?>


                        <?php endforeach; ?>
                        <?php
                        if($count ==0){
                            ?>

                            <div class="carousel-item active" style="height: 410px;">
                                <?= $this->Html->image('hemport.png'); ?>
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="box-shadow: none">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="box-shadow: none">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
                 <!-- slide end-->

         
                <!-- profile-->
                <div class="col-md-8 mb-5" style="padding-right: 55px">
                    <div style="display: flex; flex-wrap: nowrap; margin-right: -0.75rem; margin-left: -0.75rem; flex-direction: row">
                        <!--profile image-->
                        <div class ="col-md-2 profileimage">
                            <?php
                            if($builder['avatar']!= null){

                                echo $this->Html->image($builder['avatar'],['style'=>'min-width:50px ;max-width:100px ;min-height:50px ;max-height:100px ; border-radius: 50%; display: block; margin-left: 0; margin-right: auto; margin-bottom: 50px']);
                            }else{

                                echo $this->Html->image('tb-avatar-none.jpg',['style'=>'min-width:50px ;max-width:100px ;min-height:50px ;max-height:100px ; border-radius: 50%; display: block; margin-left: 0; margin-right: auto; margin-bottom: auto']);
                            }
                            ?>

                        </div>
                        <!--profile image end-->

                        <!-- profile detail-->
                        <div class ="col-md-10">
                            <br>
                            <!-- name-->
                            <div class="row">
                                <td><p style="font-size: 30px; margin-left: 60px;"><?= h($builder->name) ?></p></td>
                            </div>
                            <!-- name end-->

                            <!-- job-->
                            <div class="row">
                                <td><p style="font-size: 20px; margin-left: 60px;"><?= h($builder->name) ?></p></td>
                            </div>
                            <!-- job end-->

                        </div>
                        <!-- profile detail end-->
                    </div>
                </div>
                <!-- profile end-->

                <!-- nav-->
                 <div class="col-md-8" style="padding-right: 55px; padding-bottom: 100px">
                    <div class="row px-xl-0">
                        <div class="col">
                            <div class="nav nav-tabs mb-4">
                                <a style="color: black;" class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">About Us</a>
                                <a style="color: black;" class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Projects</a>

                            </div>
                            <div class="tab-content">

                                <!--About Us-->
                                <div class="tab-pane fade show active" id="tab-pane-1">

                                    <td><?= h($builder->description) ?></td>
                                </div>
                                <!--About Us ends-->

                                <!--Projects-->
                                <div class="tab-pane fade" id="tab-pane-2">
                                    <?php
                                    foreach ($projects as $projects): ?>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0">
                                                        Description

                                                        <p><?= h($projects->description) ?></p>
                                                    </li>

                                                    <li class="list-group-item px-0">
                                                        Cient Name

                                                        <p><?= h($projects->cname) ?></p>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Year

                                                        <p><?= h($projects->year) ?></p>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        Suburb

                                                        <p><?= h($projects->country) ?></p>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        State

                                                        <p><?= h($projects->state) ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>

                                                <?= $this->Html->image($projects->image_1,['style'=>'min-width:50px ;max-width:300px ;min-height:50px ;max-height:300px']); ?>

                                            </div>

                                        </div>
                                        <hr>
                                        <br>    <br />
                                    <?php  endforeach; ?>
                                </div>
                                <!--Projects ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nav end -->
            </div>
            <!--left col end-->

            <!--right col-->                            
            <div>
                <!-- builder contact info-->
                <div>
                    <div >
                        <p style="font-size: 20px">Contact:</p>
                    </div>

                        <table  cellpadding="10" cellspacing="0" style="border:1px solid #dee2e6; width:380px">
                            <tr style="border-bottom:2px solid #39697B0A">
                                <td style="width:9px"><span class="contact-info__icon"><i class="ti-tablet"></i></span></td>
                                <td><p style="font-size: 15px"><?= h($builder->phone) ?></p></td>
                            </tr>

                            <tr style="border-bottom:2px solid #39697B0A">
                                <td><span class="contact-info__icon"><i class="ti-home"></i></span></td>
                                <td ><p style="font-size: 15px"><?= h($builder->address) ?></p></td>
                            </tr>

                            <tr style="border-bottom:1px solid #dee2e6">
                                <td><span class="contact-info__icon"><i class="ti-email"></i></span></td>
                                <td><p style="font-size: 15px"><?= h($builder->email) ?></p></td>

                            </tr>
                        </table>
                </div>
                <!-- builder contact info ends-->                
                <!-- email start-->
                <br>
                <div style="height:20px">

                    <div >
                        <p style="font-size: 20px">Email:</p>
                    </div>
                    <?= $this->Form->create() ?>
                    <fieldset>
                        <?php
                        echo $this->Form->control('name', array('label'=>false, "class" => "form-control valid", "placeholder" => "Enter your name", "style" => "height:40px; width:380px; margin-bottom:6px; font-size:16px"));
                        echo $this->Form->control('email', array('label'=>false, "class" => "form-control valid", "placeholder" => "Enter your email address", "style" => "height:40px; width:380px; margin-bottom:6px; font-size:16px"));
                        echo $this->Form->textarea('message', array('label'=>false, "class" => "form-control valid", "id" => "message", "placeholder" => "Enter your message", "style" => "width:380px; margin-bottom:6px; font-size:16px"));
                        //echo "<br>";
                        ?>
                    </fieldset>
                    <br>
                    <?= $this->Form->button(__('Submit'), array('label'=>'Send Message', "class" => "submit-btn2", "type" => "submit", "confirm"=>"An email will be sent to the professional."))?>

                    <?= $this->Form->end() ?>

                </div>
                <!-- email end-->

            </div>

                   


        </div>
    </div>
    <!-- Contact End -->



    <br>
