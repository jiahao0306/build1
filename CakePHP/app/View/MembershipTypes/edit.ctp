<div class="membershipTypes form">
<?php echo $this->Form->create('MembershipType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Membership Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('membership_name');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MembershipType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MembershipType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Membership Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
