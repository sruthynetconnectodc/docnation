<div class="boxes form">
<?php echo $this->Form->create('Box');?>
	<fieldset>
		<legend><?php echo __('Edit Box'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('box_no');
		echo $this->Form->input('box_location');
		echo $this->Form->input('no_files');
		echo $this->Form->input('client_id');
		echo $this->Form->input('tracking_no');
		echo $this->Form->input('box_loged_user');
		echo $this->Form->input('box_loged_date');
		echo $this->Form->input('box_reg_user');
		echo $this->Form->input('box_reg_date');
		echo $this->Form->input('box_barcoded_user');
		echo $this->Form->input('box_barcoded_date');
		echo $this->Form->input('box_shred_date');
		echo $this->Form->input('box_stage');
		echo $this->Form->input('box_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Box.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Box.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
