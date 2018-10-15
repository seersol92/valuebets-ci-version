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
    <h5>Please enter the required information below.</h5>     
    <?php 
        $fattr = array('class' => 'form-signin');
        echo form_open('/main/register', $fattr);
    ?>
    <div class="form-group">
      <?php echo form_input(array('name'=>'firstname', 'id'=> 'firstname', 'placeholder'=>'First Name', 'class'=>'form-control', 'value' => set_value('firstname'))); ?>
      <?php echo form_error('firstname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'lastname', 'id'=> 'lastname', 'placeholder'=>'Last Name', 'class'=>'form-control', 'value'=> set_value('lastname'))); ?>
      <?php echo form_error('lastname');?>
    </div>
    <div class="form-group">
      <?php echo form_input(array('name'=>'email', 'id'=> 'email', 'placeholder'=>'Email', 'class'=>'form-control', 'value'=> set_value('email'))); ?>
      <?php echo form_error('email');?>
    </div>
	 <div class="form-group">
      <?php echo form_input(array('name'=>'password', 'id'=> 'password', 'type' =>'password', 'placeholder'=>'Password', 'class'=>'form-control', 'value'=> set_value('password'))); ?>
      <?php echo form_error('password');?>
    </div>
	 <div class="form-group">
      <?php echo form_input(array('name'=>'confirm_password', 'type' =>'password' ,'id'=> 'c_password', 'placeholder'=>'Confirm Password', 'class'=>'form-control', 'value'=> set_value('confirm_password'))); ?>
      <?php echo form_error('confirm_password');?>
    </div>
    <?php if($recaptcha == 'yes'){ ?>
    <div style="text-align:center;" class="form-group">
        <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
    </div>
    <?php
    }
    echo form_submit(array('value'=>'Sign up', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo form_close(); ?>
    <br>
    <p>Registered? <a href="<?php echo site_url();?>main/login">Login</a></p>
    </div>
  </div>
</div>
</div>