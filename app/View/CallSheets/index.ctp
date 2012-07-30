<div class="callSheets index">
	<h2><?php echo __('Call Sheets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_person');?></th>
			<th><?php echo $this->Paginator->sort('contact_ph_no');?></th>
			<th><?php echo $this->Paginator->sort('contact_email');?></th>
			<th><?php echo $this->Paginator->sort('contacted_date');?></th>
			<th><?php echo $this->Paginator->sort('next_contact_date');?></th>
			<th><?php echo $this->Paginator->sort('next_pickup_date');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th><?php echo $this->Paginator->sort('expected_box_count');?></th>
			<th><?php echo $this->Paginator->sort('arrived_box_count');?></th>
			<th><?php echo $this->Paginator->sort('box_eta');?></th>
			<th><?php echo $this->Paginator->sort('tracking_no');?></th>
			<th><?php echo $this->Paginator->sort('call_status');?></th>
			<th><?php echo $this->Paginator->sort('pickup_status');?></th>
			<th><?php echo $this->Paginator->sort('box_arrived_date');?></th>
			<th><?php echo $this->Paginator->sort('box_arrived_status_on_eta');?></th>
			<th><?php echo $this->Paginator->sort('email_notification_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($callSheets as $callSheet): ?>
	<tr>
		<td><?php echo h($callSheet['CallSheet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($callSheet['Client']['id'], array('controller' => 'clients', 'action' => 'view', $callSheet['Client']['id'])); ?>
		</td>
		<td><?php echo h($callSheet['CallSheet']['contact_person']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['contact_ph_no']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['contact_email']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['contacted_date']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['next_contact_date']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['next_pickup_date']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['comments']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['expected_box_count']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['arrived_box_count']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['box_eta']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['tracking_no']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['call_status']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['pickup_status']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['box_arrived_date']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['box_arrived_status_on_eta']); ?>&nbsp;</td>
		<td><?php echo h($callSheet['CallSheet']['email_notification_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $callSheet['CallSheet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $callSheet['CallSheet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $callSheet['CallSheet']['id']), null, __('Are you sure you want to delete # %s?', $callSheet['CallSheet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Call Sheet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
