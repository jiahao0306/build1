<h2>Edit User</h2>

<?php echo $this->Form->create('User'); ?>
<fieldset>
	<?php echo $this->Form->input('email'); ?>
	<fieldset>
		<legend>Options</legend>
		<?php echo $this->Form->input('admin'); ?>
	</fieldset>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>