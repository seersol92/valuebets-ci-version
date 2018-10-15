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
            <h2>Forgot Password</h2>
            <p>Please enter your email address and we'll send you instructions on how to reset your password</p>
            <br>
            <?php $fattr = array('class' => 'form-signin');
                echo form_open(site_url().'main/forgot/', $fattr); ?>
            <div class="form-group">
            <?php echo form_input(array(
                'name'=>'email', 
                'id'=> 'email', 
                'placeholder'=>'Email', 
                'class'=>'form-control', 
                'value'=> set_value('email'))); ?>
            <?php echo form_error('email') ?>
            </div>
            <?php if($recaptcha == 'yes'){ ?>
            <div style="text-align:center;" class="form-group">
                <div style="display: inline-block;"><?php echo $this->recaptcha->render(); ?></div>
            </div>
            <?php
            }
            echo form_submit(array('value'=>'Submit', 'class'=>'btn btn-lg btn-primary btn-block')); ?>
            <?php echo form_close(); ?>    
            <br>
            <p>Registered? <a href="<?php echo site_url();?>main/login">Login</a></p>
            </div>
    </div>
</div>
</div>