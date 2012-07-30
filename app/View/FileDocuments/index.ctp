<div class="fileDocuments index">
	<h2><?php echo __('File Documents');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('file_no');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('box_id');?></th>
			<th><?php echo $this->Paginator->sort('branch_id');?></th>
			<th><?php echo $this->Paginator->sort('acc_group_id');?></th>
			<th><?php echo $this->Paginator->sort('file_name');?></th>
			<th><?php echo $this->Paginator->sort('file_number');?></th>
			<th><?php echo $this->Paginator->sort('file_location_id');?></th>
			<th><?php echo $this->Paginator->sort('file_path_id');?></th>
			<th><?php echo $this->Paginator->sort('no_of_pages');?></th>
			<th><?php echo $this->Paginator->sort('kw1');?></th>
			<th><?php echo $this->Paginator->sort('kw2');?></th>
			<th><?php echo $this->Paginator->sort('kw3');?></th>
			<th><?php echo $this->Paginator->sort('kw4');?></th>
			<th><?php echo $this->Paginator->sort('kw5');?></th>
			<th><?php echo $this->Paginator->sort('form_type_id');?></th>
			<th><?php echo $this->Paginator->sort('date_received');?></th>
			<th><?php echo $this->Paginator->sort('file_registered_user');?></th>
			<th><?php echo $this->Paginator->sort('submit_date');?></th>
			<th><?php echo $this->Paginator->sort('shred_date');?></th>
			<th><?php echo $this->Paginator->sort('scan_date');?></th>
			<th><?php echo $this->Paginator->sort('file_stage');?></th>
			<th><?php echo $this->Paginator->sort('file_status');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($fileDocuments as $fileDocument): ?>
	<tr>
		<td><?php echo h($fileDocument['FileDocument']['id']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileDocument['Client']['id'], array('controller' => 'clients', 'action' => 'view', $fileDocument['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fileDocument['Box']['id'], array('controller' => 'boxes', 'action' => 'view', $fileDocument['Box']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fileDocument['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $fileDocument['Branch']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fileDocument['AccGroup']['id'], array('controller' => 'acc_groups', 'action' => 'view', $fileDocument['AccGroup']['id'])); ?>
		</td>
		<td><?php echo h($fileDocument['FileDocument']['file_name']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileDocument['FileLocation']['id'], array('controller' => 'file_locations', 'action' => 'view', $fileDocument['FileLocation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fileDocument['FilePath']['id'], array('controller' => 'file_paths', 'action' => 'view', $fileDocument['FilePath']['id'])); ?>
		</td>
		<td><?php echo h($fileDocument['FileDocument']['no_of_pages']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['kw1']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['kw2']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['kw3']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['kw4']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['kw5']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fileDocument['FormType']['id'], array('controller' => 'form_types', 'action' => 'view', $fileDocument['FormType']['id'])); ?>
		</td>
		<td><?php echo h($fileDocument['FileDocument']['date_received']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_registered_user']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['submit_date']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['shred_date']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['scan_date']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_stage']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['file_status']); ?>&nbsp;</td>
		<td><?php echo h($fileDocument['FileDocument']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileDocument['FileDocument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileDocument['FileDocument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileDocument['FileDocument']['id']), null, __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New File Document'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Groups'), array('controller' => 'acc_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Group'), array('controller' => 'acc_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Locations'), array('controller' => 'file_locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Location'), array('controller' => 'file_locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Paths'), array('controller' => 'file_paths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Path'), array('controller' => 'file_paths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Types'), array('controller' => 'form_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Type'), array('controller' => 'form_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
