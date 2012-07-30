<div class="proposals index">
	<h2><?php echo __('Proposals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('client_email_status');?></th>
			<th><?php echo $this->Paginator->sort('email_date');?></th>
			<th><?php echo $this->Paginator->sort('next_contact_date');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th><?php echo $this->Paginator->sort('client_response');?></th>
			<th><?php echo $this->Paginator->sort('proposed_date');?></th>
			<th><?php echo $this->Paginator->sort('proposal_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($proposals as $proposal): ?>
	<tr>
		<td><?php echo h($proposal['Proposal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proposal['Client']['id'], array('controller' => 'clients', 'action' => 'view', $proposal['Client']['id'])); ?>
		</td>
		<td><?php echo h($proposal['Proposal']['price']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['client_email_status']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['email_date']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['next_contact_date']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['comments']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['client_response']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['proposed_date']); ?>&nbsp;</td>
		<td><?php echo h($proposal['Proposal']['proposal_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proposal['Proposal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proposal['Proposal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proposal['Proposal']['id']), null, __('Are you sure you want to delete # %s?', $proposal['Proposal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proposal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
