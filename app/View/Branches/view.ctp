<div class="branches view">
<h2><?php  echo __('Branch');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Name'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($branch['Client']['id'], array('controller' => 'clients', 'action' => 'view', $branch['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Phone'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Fax'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Address1'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Contact Person'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Contact Position'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_contact_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Email'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch Status'); ?></dt>
		<dd>
			<?php echo h($branch['Branch']['branch_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Branch'), array('action' => 'edit', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Branch'), array('action' => 'delete', $branch['Branch']['id']), null, __('Are you sure you want to delete # %s?', $branch['Branch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Groups'), array('controller' => 'acc_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Group'), array('controller' => 'acc_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Acc Groups');?></h3>
	<?php if (!empty($branch['AccGroup'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Branch Id'); ?></th>
		<th><?php echo __('Acc Group Name'); ?></th>
		<th><?php echo __('Acc Group Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($branch['AccGroup'] as $accGroup): ?>
		<tr>
			<td><?php echo $accGroup['id'];?></td>
			<td><?php echo $accGroup['branch_id'];?></td>
			<td><?php echo $accGroup['acc_group_name'];?></td>
			<td><?php echo $accGroup['acc_group_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acc_groups', 'action' => 'view', $accGroup['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acc_groups', 'action' => 'edit', $accGroup['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acc_groups', 'action' => 'delete', $accGroup['id']), null, __('Are you sure you want to delete # %s?', $accGroup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Acc Group'), array('controller' => 'acc_groups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related File Documents');?></h3>
	<?php if (!empty($branch['FileDocument'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('File No'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Box Id'); ?></th>
		<th><?php echo __('Branch Id'); ?></th>
		<th><?php echo __('Acc Group Id'); ?></th>
		<th><?php echo __('File Name'); ?></th>
		<th><?php echo __('File Number'); ?></th>
		<th><?php echo __('File Location Id'); ?></th>
		<th><?php echo __('File Path Id'); ?></th>
		<th><?php echo __('No Of Pages'); ?></th>
		<th><?php echo __('Kw1'); ?></th>
		<th><?php echo __('Kw2'); ?></th>
		<th><?php echo __('Kw3'); ?></th>
		<th><?php echo __('Kw4'); ?></th>
		<th><?php echo __('Kw5'); ?></th>
		<th><?php echo __('Form Type Id'); ?></th>
		<th><?php echo __('Date Received'); ?></th>
		<th><?php echo __('File Registered User'); ?></th>
		<th><?php echo __('Submit Date'); ?></th>
		<th><?php echo __('Shred Date'); ?></th>
		<th><?php echo __('Scan Date'); ?></th>
		<th><?php echo __('File Stage'); ?></th>
		<th><?php echo __('File Status'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($branch['FileDocument'] as $fileDocument): ?>
		<tr>
			<td><?php echo $fileDocument['id'];?></td>
			<td><?php echo $fileDocument['file_no'];?></td>
			<td><?php echo $fileDocument['client_id'];?></td>
			<td><?php echo $fileDocument['box_id'];?></td>
			<td><?php echo $fileDocument['branch_id'];?></td>
			<td><?php echo $fileDocument['acc_group_id'];?></td>
			<td><?php echo $fileDocument['file_name'];?></td>
			<td><?php echo $fileDocument['file_number'];?></td>
			<td><?php echo $fileDocument['file_location_id'];?></td>
			<td><?php echo $fileDocument['file_path_id'];?></td>
			<td><?php echo $fileDocument['no_of_pages'];?></td>
			<td><?php echo $fileDocument['kw1'];?></td>
			<td><?php echo $fileDocument['kw2'];?></td>
			<td><?php echo $fileDocument['kw3'];?></td>
			<td><?php echo $fileDocument['kw4'];?></td>
			<td><?php echo $fileDocument['kw5'];?></td>
			<td><?php echo $fileDocument['form_type_id'];?></td>
			<td><?php echo $fileDocument['date_received'];?></td>
			<td><?php echo $fileDocument['file_registered_user'];?></td>
			<td><?php echo $fileDocument['submit_date'];?></td>
			<td><?php echo $fileDocument['shred_date'];?></td>
			<td><?php echo $fileDocument['scan_date'];?></td>
			<td><?php echo $fileDocument['file_stage'];?></td>
			<td><?php echo $fileDocument['file_status'];?></td>
			<td><?php echo $fileDocument['comments'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'file_documents', 'action' => 'view', $fileDocument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'file_documents', 'action' => 'edit', $fileDocument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'file_documents', 'action' => 'delete', $fileDocument['id']), null, __('Are you sure you want to delete # %s?', $fileDocument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
