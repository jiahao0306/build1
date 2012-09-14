<div class="membershipTypes view">
<h2><?php  echo __('Membership Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Membership Name'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['membership_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($membershipType['MembershipType']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Membership Type'), array('action' => 'edit', $membershipType['MembershipType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Membership Type'), array('action' => 'delete', $membershipType['MembershipType']['id']), null, __('Are you sure you want to delete # %s?', $membershipType['MembershipType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Membership Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($membershipType['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Organisation Name'); ?></th>
		<th><?php echo __('Additional Members'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Suburb'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Mobile Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('News Subcription'); ?></th>
		<th><?php echo __('Payment Status'); ?></th>
		<th><?php echo __('Registration Date'); ?></th>
		<th><?php echo __('Membership Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($membershipType['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['first_name']; ?></td>
			<td><?php echo $member['last_name']; ?></td>
			<td><?php echo $member['title']; ?></td>
			<td><?php echo $member['organisation_Name']; ?></td>
			<td><?php echo $member['additional Members']; ?></td>
			<td><?php echo $member['address']; ?></td>
			<td><?php echo $member['suburb']; ?></td>
			<td><?php echo $member['postcode']; ?></td>
			<td><?php echo $member['mobile_phone']; ?></td>
			<td><?php echo $member['home_phone']; ?></td>
			<td><?php echo $member['email_address']; ?></td>
			<td><?php echo $member['news_subcription']; ?></td>
			<td><?php echo $member['payment_status']; ?></td>
			<td><?php echo $member['registration_Date']; ?></td>
			<td><?php echo $member['membership_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
