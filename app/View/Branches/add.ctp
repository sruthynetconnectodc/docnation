<div class="branches form">
<?php echo $this->Form->create('Branch');?>
	<fieldset>
		<legend><?php echo __('Add Branch'); ?></legend>
	<?php
		echo $this->Form->input('branch_name');
		echo $this->Form->input('client_id');
		echo $this->Form->input('branch_phone');
		echo $this->Form->input('branch_fax');
		echo $this->Form->input('branch_address1');
		echo $this->Form->input('branch_contact_person');
		echo $this->Form->input('branch_contact_position');
		echo $this->Form->input('branch_email');
		echo $this->Form->input('branch_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Branches'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Groups'), array('controller' => 'acc_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Group'), array('controller' => 'acc_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
