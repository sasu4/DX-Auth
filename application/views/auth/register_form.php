<?php
$username = array(
	'name'	=> 'username',
	'id'	=> 'username',
	'size'	=> 30,
	'value' =>  set_value('username')
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'value' => set_value('password')
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'size'	=> 30,
	'value' => set_value('confirm_password')
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'maxlength'	=> 80,
	'size'	=> 30,
	'value'	=> set_value('email')
);
?>

<html>
<body>

<fieldset><legend>Register</legend>
    <p><?php 
                    if($this->session->flashdata('alert')!='') { ?>
                        <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('alert'); ?>
                        </div>    
                    <?php }?></p>
    <?php echo form_open($this->uri->uri_string())?>

<dl>
	<dt><?php echo form_label('Username', $username['id']);?></dt>
	<dd>
		<?php echo form_input($username)?>
                <?php //echo form_error($username['name']); ?>
	</dd>

	<dt><?php echo form_label('Password', $password['id']);?></dt>
	<dd>
		<?php echo form_password($password)?>
                <?php //echo form_error($password['name']); ?>
	</dd>

	<dt><?php echo form_label('Confirm Password', $confirm_password['id']);?></dt>
	<dd>
		<?php echo form_password($confirm_password);?>
		<?php //echo form_error($confirm_password['name']); ?>
	</dd>

	<dt><?php echo form_label('Email Address', $email['id']);?></dt>
	<dd>
		<?php echo form_input($email);?>
		<?php //echo form_error($email['name']); ?>
	</dd>
		
<?php if ($this->dx_auth->captcha_registration): ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
	<dt><?php echo form_label('Captcha');?></dt>
        <dd>
            <?php echo $recaptcha_html;?>
        </dd>
<?php endif; ?>

	<dt></dt>
	<dd><?php echo form_submit('register','Register');?></dd>
</dl>

<?php echo form_close()?>
</fieldset>
</body>
</html>