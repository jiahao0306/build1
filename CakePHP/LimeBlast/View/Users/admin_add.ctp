<h2>Add User</h2>

<?php echo $this->Form->create('User'); ?>
<fieldset>
	<?php echo $this->Form->input('email', array('type' => 'email')); ?>
	<?php echo $this->Form->input('password'); ?>
	<?php echo $this->Form->input('password_confirmation', array('type' => 'password')); ?>
	<fieldset>
		<legend>Options</legend>
		<?php echo $this->Form->input('admin'); ?>
	</fieldset>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>