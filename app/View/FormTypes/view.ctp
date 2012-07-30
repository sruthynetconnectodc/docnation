<div class="formTypes view">
<h2><?php  echo __('Form Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formType['FormType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Type Name'); ?></dt>
		<dd>
			<?php echo h($formType['FormType']['form_type_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Type Status'); ?></dt>
		<dd>
			<?php echo h($formType['FormType']['form_type_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Type'), array('action' => 'edit', $formType['FormType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Type'), array('action' => 'delete', $formType['FormType']['id']), null, __('Are you sure you want to delete # %s?', $formType['FormType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related File Documents');?></h3>
	<?php if (!empty($formType['FileDocument'])):?>
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
		foreach ($formType['FileDocument'] as $fileDocument): ?>
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
