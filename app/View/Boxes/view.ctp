<div class="boxes view">
<h2><?php  echo __('Box');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($box['Box']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box No'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Location'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Files'); ?></dt>
		<dd>
			<?php echo h($box['Box']['no_files']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($box['Client']['id'], array('controller' => 'clients', 'action' => 'view', $box['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking No'); ?></dt>
		<dd>
			<?php echo h($box['Box']['tracking_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Loged User'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_loged_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Loged Date'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_loged_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Reg User'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_reg_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Reg Date'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_reg_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Barcoded User'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_barcoded_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Barcoded Date'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_barcoded_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Shred Date'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_shred_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Stage'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_stage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Status'); ?></dt>
		<dd>
			<?php echo h($box['Box']['box_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Box'), array('action' => 'edit', $box['Box']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Box'), array('action' => 'delete', $box['Box']['id']), null, __('Are you sure you want to delete # %s?', $box['Box']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Boxes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Box'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related File Documents');?></h3>
	<?php if (!empty($box['FileDocument'])):?>
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
		foreach ($box['FileDocument'] as $fileDocument): ?>
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
<div class="related">
	<h3><?php echo __('Related Invoices');?></h3>
	<?php if (!empty($box['Invoice'])):?>
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
		foreach ($box['Invoice'] as $invoice): ?>
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
