<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('title');
		echo $this->Form->input('organisation_Name');
		echo $this->Form->input('additional Members');
		echo $this->Form->input('address');
		echo $this->Form->input('suburb');
		echo $this->Form->input('postcode');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('email_address');
		echo $this->Form->input('news_subcription');
		echo $this->Form->input('payment_status');
		echo $this->Form->input('registration_Date');
		echo $this->Form->input('membership_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Member.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membership Types'), array('controller' => 'membership_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership Type'), array('controller' => 'membership_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
