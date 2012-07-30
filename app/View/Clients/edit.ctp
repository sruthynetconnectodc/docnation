<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('industry_id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('company_acronym');
		echo $this->Form->input('authority');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('address');
		echo $this->Form->input('telephone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('contact_name');
		echo $this->Form->input('contact_telephone_no');
		echo $this->Form->input('contact_position');
		echo $this->Form->input('user_id');
		echo $this->Form->input('client_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
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
