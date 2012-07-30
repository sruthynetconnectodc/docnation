<div class="fileDocuments view">
<h2><?php  echo __('File Document');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File No'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['Client']['id'], array('controller' => 'clients', 'action' => 'view', $fileDocument['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['Box']['id'], array('controller' => 'boxes', 'action' => 'view', $fileDocument['Box']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Branch'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['Branch']['id'], array('controller' => 'branches', 'action' => 'view', $fileDocument['Branch']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acc Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['AccGroup']['id'], array('controller' => 'acc_groups', 'action' => 'view', $fileDocument['AccGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Number'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['FileLocation']['id'], array('controller' => 'file_locations', 'action' => 'view', $fileDocument['FileLocation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['FilePath']['id'], array('controller' => 'file_paths', 'action' => 'view', $fileDocument['FilePath']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Pages'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['no_of_pages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kw1'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['kw1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kw2'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['kw2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kw3'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['kw3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kw4'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['kw4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kw5'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['kw5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fileDocument['FormType']['id'], array('controller' => 'form_types', 'action' => 'view', $fileDocument['FormType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Received'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['date_received']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Registered User'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_registered_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Submit Date'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['submit_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shred Date'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['shred_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scan Date'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['scan_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Stage'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_stage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Status'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['file_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($fileDocument['FileDocument']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit File Document'), array('action' => 'edit', $fileDocument['FileDocument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete File Document'), array('action' => 'delete', $fileDocument['FileDocument']['id']), null, __('Are you sure you want to delete # %s?', $fileDocument['FileDocument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Invoices');?></h3>
	<?php if (!empty($fileDocument['Invoice'])):?>
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
		foreach ($fileDocument['Invoice'] as $invoice): ?>
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
