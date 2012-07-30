<div class="fileDocuments form">
<?php echo $this->Form->create('FileDocument');?>
	<fieldset>
		<legend><?php echo __('Edit File Document'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('file_no');
		echo $this->Form->input('client_id');
		echo $this->Form->input('box_id');
		echo $this->Form->input('branch_id');
		echo $this->Form->input('acc_group_id');
		echo $this->Form->input('file_name');
		echo $this->Form->input('file_number');
		echo $this->Form->input('file_location_id');
		echo $this->Form->input('file_path_id');
		echo $this->Form->input('no_of_pages');
		echo $this->Form->input('kw1');
		echo $this->Form->input('kw2');
		echo $this->Form->input('kw3');
		echo $this->Form->input('kw4');
		echo $this->Form->input('kw5');
		echo $this->Form->input('form_type_id');
		echo $this->Form->input('date_received');
		echo $this->Form->input('file_registered_user');
		echo $this->Form->input('submit_date');
		echo $this->Form->input('shred_date');
		echo $this->Form->input('scan_date');
		echo $this->Form->input('file_stage');
		echo $this->Form->input('file_status');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FileDocument.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FileDocument.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('action' => 'index'));?></li>
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
