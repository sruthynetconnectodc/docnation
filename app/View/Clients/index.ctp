<div class="clients index">
	<h2><?php echo __('Clients');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('industry_id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('company_acronym');?></th>
			<th><?php echo $this->Paginator->sort('authority');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th><?php echo $this->Paginator->sort('contact_telephone_no');?></th>
			<th><?php echo $this->Paginator->sort('contact_position');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('client_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clients as $client): ?>
	<tr>
		<td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['Industry']['id'], array('controller' => 'industries', 'action' => 'view', $client['Industry']['id'])); ?>
		</td>
		<td><?php echo h($client['Client']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['company_acronym']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['authority']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['city']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['state']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['zip']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['address']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['fax']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['email']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['contact_name']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['contact_telephone_no']); ?>&nbsp;</td>
		<td><?php echo h($client['Client']['contact_position']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($client['User']['id'], array('controller' => 'users', 'action' => 'view', $client['User']['id'])); ?>
		</td>
		<td><?php echo h($client['Client']['client_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sheets'), array('controller' => 'call_sheets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Sheet'), array('controller' => 'call_sheets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Infos'), array('controller' => 'check_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Info'), array('controller' => 'check_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('controller' => 'client_preferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('controller' => 'client_preferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('controller' => 'proposals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add')); ?> </li>
	</ul>
</div>
