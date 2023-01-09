<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

//$type = "";
?>
<!-- breadcrumb Start-->
<div class="page-notification">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller' => 'users', 'action'=>'login']); ?>">Login</a></li>
                        <li class="breadcrumb-item"><a href="#">Register</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End-->

<div class="row">
    <div class="column-responsive column-80">

        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <div class="row">
                    <div class="col-12">
                        <h1 class="contact-title">Register</h1>
                    </div>
                </div>
                <?php
                echo $this->Form->control('username', array('label'=>'Email (*)', "class" => "form-control valid", "placeholder" => "username", "style" => "height:40px"));
                echo "<br>";
                echo $this->Form->control('password', array('label'=>'Password (*)', "class" => "form-control valid", "placeholder" => "password", "style" => "height:40px"));
                echo "<br>";
                echo $this->Form->control('retype_password', array('label'=>'Confirm Password (*)', "type"=>"password", "class" => "form-control valid", "placeholder" => "retype password", "style" => "height:40px"));
                echo "<br>";
                echo "*Account Type";
                echo "<br>";
                echo $this->Form->select('type',['Buyer'=>'Buyer','Seller'=>'Seller','Builder'=>'Professional']);



                ?>
            </fieldset>
            <br>
            <?= //$this->Form->button(__('Submit'), array("class" => "submit-btn2", "type" => "submit", "confirm"=>"Are you sure you want to create a " . $type . " account?"))
            $this->Form->button(__('Submit'), array("class" => "submit-btn2", "type" => "submit", "confirm"=>"Are your details correct? (Account Type is permanent)"))?>
            <br>
            <?php echo $this->Flash->render(); ?>
            <br><br><br><br><br><br>
            <?= $this->Form->end() ?>

            <br>

        </div>
    </div>
</div>
