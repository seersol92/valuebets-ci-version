<div class="container" >
      <div class="row justify-content-center" style="margin-top: 10vh;">
        <div class="col-md-6">
		<img src="<?=base_url()?>assets/img/logo-valuebets.svg" style="
			width: 60%;
			margin-left: auto;
			margin-right: auto;
			display: block;
			padding: 50px;
        ">  
    <h5>Please Login</h5>
    <?php $fattr = array('class' => 'form-signin');
         echo form_open(site_url().'main/login/', $fattr); ?>
    <div class="form-group">
      <?php echo form_input(array(
          'name'=>'email', 
          'id'=> 'email', 
          'placeholder'=>'Email', 
          'class'=>'form-control', 
          'value'=> set_value('email'))); ?>
      <?php echo form_error('email') ?>
    </div>
    <div class="form-group">
      <?php echo form_password(array(
          'name'=>'password', 
          'id'=> 'password', 
          'placeholder'=>'Password', 
          'class'=>'form-control', 
          'value'=> set_value('password'))); ?>
      <?php echo form_error('password') ?>
    </div>
    <?php if($recaptcha == 'yes'){ ?>
    <div style="text-align:center;" class="form-group">
        <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
    </div>
    <?php
    }
    echo form_submit(array('value'=>'Login', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
    <br>
    <p>Not registered? <a href="<?php echo site_url();?>main/register">Register</a></p>
    <p>Forgot your password? <a href="<?php echo site_url();?>main/forgot">Forgot Password</a></p>
</div>
</div>