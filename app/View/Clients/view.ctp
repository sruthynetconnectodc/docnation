<div class="clients view">
<h2><?php  echo __('Client');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($client['Client']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['Industry']['id'], array('controller' => 'industries', 'action' => 'view', $client['Industry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Acronym'); ?></dt>
		<dd>
			<?php echo h($client['Client']['company_acronym']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authority'); ?></dt>
		<dd>
			<?php echo h($client['Client']['authority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($client['Client']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($client['Client']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($client['Client']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($client['Client']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($client['Client']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($client['Client']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($client['Client']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Name'); ?></dt>
		<dd>
			<?php echo h($client['Client']['contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Telephone No'); ?></dt>
		<dd>
			<?php echo h($client['Client']['contact_telephone_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Position'); ?></dt>
		<dd>
			<?php echo h($client['Client']['contact_position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($client['User']['id'], array('controller' => 'users', 'action' => 'view', $client['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Status'); ?></dt>
		<dd>
			<?php echo h($client['Client']['client_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Boxes');?></h3>
	<?php if (!empty($client['Box'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Box No'); ?></th>
		<th><?php echo __('Box Location'); ?></th>
		<th><?php echo __('No Files'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Tracking No'); ?></th>
		<th><?php echo __('Box Loged User'); ?></th>
		<th><?php echo __('Box Loged Date'); ?></th>
		<th><?php echo __('Box Reg User'); ?></th>
		<th><?php echo __('Box Reg Date'); ?></th>
		<th><?php echo __('Box Barcoded User'); ?></th>
		<th><?php echo __('Box Barcoded Date'); ?></th>
		<th><?php echo __('Box Shred Date'); ?></th>
		<th><?php echo __('Box Stage'); ?></th>
		<th><?php echo __('Box Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Box'] as $box): ?>
		<tr>
			<td><?php echo $box['id'];?></td>
			<td><?php echo $box['box_no'];?></td>
			<td><?php echo $box['box_location'];?></td>
			<td><?php echo $box['no_files'];?></td>
			<td><?php echo $box['client_id'];?></td>
			<td><?php echo $box['tracking_no'];?></td>
			<td><?php echo $box['box_loged_user'];?></td>
			<td><?php echo $box['box_loged_date'];?></td>
			<td><?php echo $box['box_reg_user'];?></td>
			<td><?php echo $box['box_reg_date'];?></td>
			<td><?php echo $box['box_barcoded_user'];?></td>
			<td><?php echo $box['box_barcoded_date'];?></td>
			<td><?php echo $box['box_shred_date'];?></td>
			<td><?php echo $box['box_stage'];?></td>
			<td><?php echo $box['box_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'boxes', 'action' => 'view', $box['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'boxes', 'action' => 'edit', $box['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'boxes', 'action' => 'delete', $box['id']), null, __('Are you sure you want to delete # %s?', $box['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Box'), array('controller' => 'boxes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Branches');?></h3>
	<?php if (!empty($client['Branch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Branch Name'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Branch Phone'); ?></th>
		<th><?php echo __('Branch Fax'); ?></th>
		<th><?php echo __('Branch Address1'); ?></th>
		<th><?php echo __('Branch Contact Person'); ?></th>
		<th><?php echo __('Branch Contact Position'); ?></th>
		<th><?php echo __('Branch Email'); ?></th>
		<th><?php echo __('Branch Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Branch'] as $branch): ?>
		<tr>
			<td><?php echo $branch['id'];?></td>
			<td><?php echo $branch['branch_name'];?></td>
			<td><?php echo $branch['client_id'];?></td>
			<td><?php echo $branch['branch_phone'];?></td>
			<td><?php echo $branch['branch_fax'];?></td>
			<td><?php echo $branch['branch_address1'];?></td>
			<td><?php echo $branch['branch_contact_person'];?></td>
			<td><?php echo $branch['branch_contact_position'];?></td>
			<td><?php echo $branch['branch_email'];?></td>
			<td><?php echo $branch['branch_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'branches', 'action' => 'view', $branch['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'branches', 'action' => 'edit', $branch['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'branches', 'action' => 'delete', $branch['id']), null, __('Are you sure you want to delete # %s?', $branch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Call Sheets');?></h3>
	<?php if (!empty($client['CallSheet'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Contact Person'); ?></th>
		<th><?php echo __('Contact Ph No'); ?></th>
		<th><?php echo __('Contact Email'); ?></th>
		<th><?php echo __('Contacted Date'); ?></th>
		<th><?php echo __('Next Contact Date'); ?></th>
		<th><?php echo __('Next Pickup Date'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Expected Box Count'); ?></th>
		<th><?php echo __('Arrived Box Count'); ?></th>
		<th><?php echo __('Box Eta'); ?></th>
		<th><?php echo __('Tracking No'); ?></th>
		<th><?php echo __('Call Status'); ?></th>
		<th><?php echo __('Pickup Status'); ?></th>
		<th><?php echo __('Box Arrived Date'); ?></th>
		<th><?php echo __('Box Arrived Status On Eta'); ?></th>
		<th><?php echo __('Email Notification Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['CallSheet'] as $callSheet): ?>
		<tr>
			<td><?php echo $callSheet['id'];?></td>
			<td><?php echo $callSheet['client_id'];?></td>
			<td><?php echo $callSheet['contact_person'];?></td>
			<td><?php echo $callSheet['contact_ph_no'];?></td>
			<td><?php echo $callSheet['contact_email'];?></td>
			<td><?php echo $callSheet['contacted_date'];?></td>
			<td><?php echo $callSheet['next_contact_date'];?></td>
			<td><?php echo $callSheet['next_pickup_date'];?></td>
			<td><?php echo $callSheet['comments'];?></td>
			<td><?php echo $callSheet['expected_box_count'];?></td>
			<td><?php echo $callSheet['arrived_box_count'];?></td>
			<td><?php echo $callSheet['box_eta'];?></td>
			<td><?php echo $callSheet['tracking_no'];?></td>
			<td><?php echo $callSheet['call_status'];?></td>
			<td><?php echo $callSheet['pickup_status'];?></td>
			<td><?php echo $callSheet['box_arrived_date'];?></td>
			<td><?php echo $callSheet['box_arrived_status_on_eta'];?></td>
			<td><?php echo $callSheet['email_notification_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'call_sheets', 'action' => 'view', $callSheet['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'call_sheets', 'action' => 'edit', $callSheet['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'call_sheets', 'action' => 'delete', $callSheet['id']), null, __('Are you sure you want to delete # %s?', $callSheet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Call Sheet'), array('controller' => 'call_sheets', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Check Infos');?></h3>
	<?php if (!empty($client['CheckInfo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Check No'); ?></th>
		<th><?php echo __('Check Date'); ?></th>
		<th><?php echo __('Issuing Company'); ?></th>
		<th><?php echo __('Check Amount'); ?></th>
		<th><?php echo __('Check Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['CheckInfo'] as $checkInfo): ?>
		<tr>
			<td><?php echo $checkInfo['id'];?></td>
			<td><?php echo $checkInfo['client_id'];?></td>
			<td><?php echo $checkInfo['check_no'];?></td>
			<td><?php echo $checkInfo['check_date'];?></td>
			<td><?php echo $checkInfo['issuing_company'];?></td>
			<td><?php echo $checkInfo['check_amount'];?></td>
			<td><?php echo $checkInfo['check_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'check_infos', 'action' => 'view', $checkInfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'check_infos', 'action' => 'edit', $checkInfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'check_infos', 'action' => 'delete', $checkInfo['id']), null, __('Are you sure you want to delete # %s?', $checkInfo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Check Info'), array('controller' => 'check_infos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Client Preferences');?></h3>
	<?php if (!empty($client['ClientPreference'])):?>
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
		foreach ($client['ClientPreference'] as $clientPreference): ?>
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
	<h3><?php echo __('Related File Documents');?></h3>
	<?php if (!empty($client['FileDocument'])):?>
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
		foreach ($client['FileDocument'] as $fileDocument): ?>
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
	<?php if (!empty($client['Invoice'])):?>
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
		foreach ($client['Invoice'] as $invoice): ?>
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
<div class="related">
	<h3><?php echo __('Related Proposals');?></h3>
	<?php if (!empty($client['Proposal'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Client Email Status'); ?></th>
		<th><?php echo __('Email Date'); ?></th>
		<th><?php echo __('Next Contact Date'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Client Response'); ?></th>
		<th><?php echo __('Proposed Date'); ?></th>
		<th><?php echo __('Proposal Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($client['Proposal'] as $proposal): ?>
		<tr>
			<td><?php echo $proposal['id'];?></td>
			<td><?php echo $proposal['client_id'];?></td>
			<td><?php echo $proposal['price'];?></td>
			<td><?php echo $proposal['client_email_status'];?></td>
			<td><?php echo $proposal['email_date'];?></td>
			<td><?php echo $proposal['next_contact_date'];?></td>
			<td><?php echo $proposal['comments'];?></td>
			<td><?php echo $proposal['client_response'];?></td>
			<td><?php echo $proposal['proposed_date'];?></td>
			<td><?php echo $proposal['proposal_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'proposals', 'action' => 'view', $proposal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'proposals', 'action' => 'edit', $proposal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'proposals', 'action' => 'delete', $proposal['id']), null, __('Are you sure you want to delete # %s?', $proposal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Proposal'), array('controller' => 'proposals', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
