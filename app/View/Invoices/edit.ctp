<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('file_document_id');
		echo $this->Form->input('box_id');
		echo $this->Form->input('billing_plan_id');
		echo $this->Form->input('invoice_amount');
		echo $this->Form->input('amount_paid');
		echo $this->Form->input('payment_due_date');
		echo $this->Form->input('payment_status');
		echo $this->Form->input('invoice_print_status');
		echo $this->Form->input('invoice_print_date');
		echo $this->Form->input('invoice_sent_date');
		echo $this->Form->input('notes');
		echo $this->Form->input('overdue_mail_send');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('controller' => 'boxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('controller' => 'billing_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('controller' => 'billing_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
