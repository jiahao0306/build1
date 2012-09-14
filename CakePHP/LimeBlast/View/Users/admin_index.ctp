<h2>Users</h2>
<table cellpadding="0" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
			<th><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
			<tr>
				<th scope="row"><?php echo $user['User']['id']; ?></th>
				<td><?php echo h($user['User']['email']); ?></td>
				<td>
					<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'], 'admin' => true)); ?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'], 'admin' => true)); ?>
					<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id'], 'admin' => true), array('confirm'=>'Are you sure you want to delete that user?')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="paging">
<?php
	echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next('next >', array(), null, array('class' => 'next disabled'));
?>
</div>