<div class="invoices view">
<h2><?php  echo __('Invoice');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Client']['id'], array('controller' => 'clients', 'action' => 'view', $invoice['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice No'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Document'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['FileDocument']['id'], array('controller' => 'file_documents', 'action' => 'view', $invoice['FileDocument']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Box']['id'], array('controller' => 'boxes', 'action' => 'view', $invoice['Box']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['BillingPlan']['id'], array('controller' => 'billing_plans', 'action' => 'view', $invoice['BillingPlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Amount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Paid'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['amount_paid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Due Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['payment_due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Status'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['payment_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Print Status'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_print_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Print Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_print_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Sent Date'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_sent_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overdue Mail Send'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['overdue_mail_send']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
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
