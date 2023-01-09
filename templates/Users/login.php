<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hemport</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../img/hemporticon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <?= $this->Html->css('fontawesome-all.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('loginstyle.css') ?>

</head>

<body>
<!-- partial:index.partial.html -->
<div>
    <a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>" style="color: #fff;">🡄 Back to home</a>
</div>
    <div class="box-form">
    <div class="left">
        <div class="overlay">

            <div class="hemportcont">

                <a href="<?= $this->Url->build(['controller' => 'home', 'action'=>'#']); ?>"><img src="../img/logo/logo2_footer.png" alt="" style="color: green"></i></a>
                <br>
                <div class="hemporttext"><h2>says...</h2></div>
            </div>
            <h3 style="text-align: center"> Hi! Support DIYone by registering with us! Members get cooler features! </h3>
            <span>
			<!--<p>login with social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>-->
		</span>
        </div>
    </div>


    <div class="right">

            <div class="users form">
                <?= $this->Flash->render() ?>
                <?= $this->Form->create() ?>

                <fieldset>
                    <?= $this->Form->control('username', ['label'=> false, 'required' => true,"placeholder"=>"  Enter Username"]) ?>
                    <br>
                    <?= $this->Form->control('password', ['label'=> false, 'required' => true,"placeholder"=>"  Enter Password"]) ?>
                </fieldset>

                <br>

                <p>Don't have an account? <?= $this->Html->link("Create new account", ['action' => 'register']) ?>, it takes less than a minute!</p>

                <p>Forgot your password? <?= $this->Html->link("Reset password", ['action' => 'forgotpassword']) ?>.</p>

                <br>

                <?= $this->Form->button(__('Login')); ?>

                <?= $this->Form->end() ?>
            </div>

        <br>

    </div>

</div>
<!-- partial -->

</body>


