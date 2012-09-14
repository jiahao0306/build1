<div class="members index">
	<h2><?php echo __('Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('organisation_Name'); ?></th>
			<th><?php echo $this->Paginator->sort('additional Members'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('suburb'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('home_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('news_subcription'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_status'); ?></th>
			<th><?php echo $this->Paginator->sort('registration_Date'); ?></th>
			<th><?php echo $this->Paginator->sort('membership_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['title']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['organisation_Name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['additional Members']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['suburb']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['postcode']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mobile_phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['home_phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['news_subcription']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['payment_status']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['registration_Date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['MembershipType']['id'], array('controller' => 'membership_types', 'action' => 'view', $member['MembershipType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Membership Types'), array('controller' => 'membership_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership Type'), array('controller' => 'membership_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
