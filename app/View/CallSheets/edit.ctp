<div class="callSheets form">
<?php echo $this->Form->create('CallSheet');?>
	<fieldset>
		<legend><?php echo __('Edit Call Sheet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('contact_person');
		echo $this->Form->input('contact_ph_no');
		echo $this->Form->input('contact_email');
		echo $this->Form->input('contacted_date');
		echo $this->Form->input('next_contact_date');
		echo $this->Form->input('next_pickup_date');
		echo $this->Form->input('comments');
		echo $this->Form->input('expected_box_count');
		echo $this->Form->input('arrived_box_count');
		echo $this->Form->input('box_eta');
		echo $this->Form->input('tracking_no');
		echo $this->Form->input('call_status');
		echo $this->Form->input('pickup_status');
		echo $this->Form->input('box_arrived_date');
		echo $this->Form->input('box_arrived_status_on_eta');
		echo $this->Form->input('email_notification_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CallSheet.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CallSheet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Call Sheets'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
