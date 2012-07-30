<div class="proposals form">
<?php echo $this->Form->create('Proposal');?>
	<fieldset>
		<legend><?php echo __('Add Proposal'); ?></legend>
	<?php
		echo $this->Form->input('client_id');
		echo $this->Form->input('price');
		echo $this->Form->input('client_email_status');
		echo $this->Form->input('email_date');
		echo $this->Form->input('next_contact_date');
		echo $this->Form->input('comments');
		echo $this->Form->input('client_response');
		echo $this->Form->input('proposed_date');
		echo $this->Form->input('proposal_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proposals'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
