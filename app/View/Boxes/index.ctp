<div class="boxes index">
	<h2><?php echo __('Boxes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('box_no');?></th>
			<th><?php echo $this->Paginator->sort('box_location');?></th>
			<th><?php echo $this->Paginator->sort('no_files');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('tracking_no');?></th>
			<th><?php echo $this->Paginator->sort('box_loged_user');?></th>
			<th><?php echo $this->Paginator->sort('box_loged_date');?></th>
			<th><?php echo $this->Paginator->sort('box_reg_user');?></th>
			<th><?php echo $this->Paginator->sort('box_reg_date');?></th>
			<th><?php echo $this->Paginator->sort('box_barcoded_user');?></th>
			<th><?php echo $this->Paginator->sort('box_barcoded_date');?></th>
			<th><?php echo $this->Paginator->sort('box_shred_date');?></th>
			<th><?php echo $this->Paginator->sort('box_stage');?></th>
			<th><?php echo $this->Paginator->sort('box_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($boxes as $box): ?>
	<tr>
		<td><?php echo h($box['Box']['id']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_no']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_location']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['no_files']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($box['Client']['id'], array('controller' => 'clients', 'action' => 'view', $box['Client']['id'])); ?>
		</td>
		<td><?php echo h($box['Box']['tracking_no']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_loged_user']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_loged_date']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_reg_user']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_reg_date']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_barcoded_user']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_barcoded_date']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_shred_date']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_stage']); ?>&nbsp;</td>
		<td><?php echo h($box['Box']['box_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $box['Box']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $box['Box']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $box['Box']['id']), null, __('Are you sure you want to delete # %s?', $box['Box']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Box'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
