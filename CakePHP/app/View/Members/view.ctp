<div class="members view">
<h2><?php  echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($member['Member']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organisation Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['organisation_Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Additional Members'); ?></dt>
		<dd>
			<?php echo h($member['Member']['additional Members']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suburb'); ?></dt>
		<dd>
			<?php echo h($member['Member']['suburb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($member['Member']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mobile_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('News Subcription'); ?></dt>
		<dd>
			<?php echo h($member['Member']['news_subcription']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Status'); ?></dt>
		<dd>
			<?php echo h($member['Member']['payment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Date'); ?></dt>
		<dd>
			<?php echo h($member['Member']['registration_Date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['MembershipType']['id'], array('controller' => 'membership_types', 'action' => 'view', $member['MembershipType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Membership Types'), array('controller' => 'membership_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership Type'), array('controller' => 'membership_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
