<div class="branches index">
	<h2><?php echo __('Branches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('branch_name');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('branch_phone');?></th>
			<th><?php echo $this->Paginator->sort('branch_fax');?></th>
			<th><?php echo $this->Paginator->sort('branch_address1');?></th>
			<th><?php echo $this->Paginator->sort('branch_contact_person');?></th>
			<th><?php echo $this->Paginator->sort('branch_contact_position');?></th>
			<th><?php echo $this->Paginator->sort('branch_email');?></th>
			<th><?php echo $this->Paginator->sort('branch_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($branches as $branch): ?>
	<tr>
		<td><?php echo h($branch['Branch']['id']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($branch['Client']['id'], array('controller' => 'clients', 'action' => 'view', $branch['Client']['id'])); ?>
		</td>
		<td><?php echo h($branch['Branch']['branch_phone']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_fax']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_address1']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_contact_person']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_contact_position']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_email']); ?>&nbsp;</td>
		<td><?php echo h($branch['Branch']['branch_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $branch['Branch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $branch['Branch']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Groups'), array('controller' => 'acc_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Group'), array('controller' => 'acc_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
