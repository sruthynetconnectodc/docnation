<div class="billingPlans view">
<h2><?php  echo __('Billing Plan');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Plan Name'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['billing_plan_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Plan Amount'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['billing_plan_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Frequency'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['billing_frequency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge Per'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['charge_per']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Plan Status'); ?></dt>
		<dd>
			<?php echo h($billingPlan['BillingPlan']['billing_plan_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Billing Plan'), array('action' => 'edit', $billingPlan['BillingPlan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Billing Plan'), array('action' => 'delete', $billingPlan['BillingPlan']['id']), null, __('Are you sure you want to delete # %s?', $billingPlan['BillingPlan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('controller' => 'client_preferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('controller' => 'client_preferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Client Preferences');?></h3>
	<?php if (!empty($billingPlan['ClientPreference'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Storing As'); ?></th>
		<th><?php echo __('Years Of Storage'); ?></th>
		<th><?php echo __('Storage File Format'); ?></th>
		<th><?php echo __('Is Color Scan'); ?></th>
		<th><?php echo __('Color Dpi'); ?></th>
		<th><?php echo __('Shred Or Return'); ?></th>
		<th><?php echo __('No Of Keywords'); ?></th>
		<th><?php echo __('Billing Plan Id'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Card Type'); ?></th>
		<th><?php echo __('Cc No'); ?></th>
		<th><?php echo __('Name On Card'); ?></th>
		<th><?php echo __('Address On Card'); ?></th>
		<th><?php echo __('Exp Date'); ?></th>
		<th><?php echo __('Cvv No'); ?></th>
		<th><?php echo __('Is Shipping'); ?></th>
		<th><?php echo __('Shipping Cost'); ?></th>
		<th><?php echo __('Shipping Instrns'); ?></th>
		<th><?php echo __('Special Instrns'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($billingPlan['ClientPreference'] as $clientPreference): ?>
		<tr>
			<td><?php echo $clientPreference['id'];?></td>
			<td><?php echo $clientPreference['client_id'];?></td>
			<td><?php echo $clientPreference['storing_as'];?></td>
			<td><?php echo $clientPreference['years_of_storage'];?></td>
			<td><?php echo $clientPreference['storage_file_format'];?></td>
			<td><?php echo $clientPreference['is_color_scan'];?></td>
			<td><?php echo $clientPreference['color_dpi'];?></td>
			<td><?php echo $clientPreference['shred_or_return'];?></td>
			<td><?php echo $clientPreference['no_of_keywords'];?></td>
			<td><?php echo $clientPreference['billing_plan_id'];?></td>
			<td><?php echo $clientPreference['payment_method'];?></td>
			<td><?php echo $clientPreference['card_type'];?></td>
			<td><?php echo $clientPreference['cc_no'];?></td>
			<td><?php echo $clientPreference['name_on_card'];?></td>
			<td><?php echo $clientPreference['address_on_card'];?></td>
			<td><?php echo $clientPreference['exp_date'];?></td>
			<td><?php echo $clientPreference['cvv_no'];?></td>
			<td><?php echo $clientPreference['is_shipping'];?></td>
			<td><?php echo $clientPreference['shipping_cost'];?></td>
			<td><?php echo $clientPreference['shipping_instrns'];?></td>
			<td><?php echo $clientPreference['special_instrns'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'client_preferences', 'action' => 'view', $clientPreference['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'client_preferences', 'action' => 'edit', $clientPreference['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'client_preferences', 'action' => 'delete', $clientPreference['id']), null, __('Are you sure you want to delete # %s?', $clientPreference['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client Preference'), array('controller' => 'client_preferences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices');?></h3>
	<?php if (!empty($billingPlan['Invoice'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Invoice No'); ?></th>
		<th><?php echo __('File Document Id'); ?></th>
		<th><?php echo __('Box Id'); ?></th>
		<th><?php echo __('Billing Plan Id'); ?></th>
		<th><?php echo __('Invoice Amount'); ?></th>
		<th><?php echo __('Amount Paid'); ?></th>
		<th><?php echo __('Payment Due Date'); ?></th>
		<th><?php echo __('Payment Status'); ?></th>
		<th><?php echo __('Invoice Print Status'); ?></th>
		<th><?php echo __('Invoice Print Date'); ?></th>
		<th><?php echo __('Invoice Sent Date'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Overdue Mail Send'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($billingPlan['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id'];?></td>
			<td><?php echo $invoice['client_id'];?></td>
			<td><?php echo $invoice['invoice_no'];?></td>
			<td><?php echo $invoice['file_document_id'];?></td>
			<td><?php echo $invoice['box_id'];?></td>
			<td><?php echo $invoice['billing_plan_id'];?></td>
			<td><?php echo $invoice['invoice_amount'];?></td>
			<td><?php echo $invoice['amount_paid'];?></td>
			<td><?php echo $invoice['payment_due_date'];?></td>
			<td><?php echo $invoice['payment_status'];?></td>
			<td><?php echo $invoice['invoice_print_status'];?></td>
			<td><?php echo $invoice['invoice_print_date'];?></td>
			<td><?php echo $invoice['invoice_sent_date'];?></td>
			<td><?php echo $invoice['notes'];?></td>
			<td><?php echo $invoice['overdue_mail_send'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
