<h2>Register</h2>

<?php echo $this->Form->create('User');?>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirmation', array('type'=>'password'));
	?>
<?php echo $this->Form->end('Submit');?>