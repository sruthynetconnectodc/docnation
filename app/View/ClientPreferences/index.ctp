<div class="clientPreferences index">
	<h2><?php echo __('Client Preferences');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_id');?></th>
			<th><?php echo $this->Paginator->sort('storing_as');?></th>
			<th><?php echo $this->Paginator->sort('years_of_storage');?></th>
			<th><?php echo $this->Paginator->sort('storage_file_format');?></th>
			<th><?php echo $this->Paginator->sort('is_color_scan');?></th>
			<th><?php echo $this->Paginator->sort('color_dpi');?></th>
			<th><?php echo $this->Paginator->sort('shred_or_return');?></th>
			<th><?php echo $this->Paginator->sort('no_of_keywords');?></th>
			<th><?php echo $this->Paginator->sort('billing_plan_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_method');?></th>
			<th><?php echo $this->Paginator->sort('card_type');?></th>
			<th><?php echo $this->Paginator->sort('cc_no');?></th>
			<th><?php echo $this->Paginator->sort('name_on_card');?></th>
			<th><?php echo $this->Paginator->sort('address_on_card');?></th>
			<th><?php echo $this->Paginator->sort('exp_date');?></th>
			<th><?php echo $this->Paginator->sort('cvv_no');?></th>
			<th><?php echo $this->Paginator->sort('is_shipping');?></th>
			<th><?php echo $this->Paginator->sort('shipping_cost');?></th>
			<th><?php echo $this->Paginator->sort('shipping_instrns');?></th>
			<th><?php echo $this->Paginator->sort('special_instrns');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientPreferences as $clientPreference): ?>
	<tr>
		<td><?php echo h($clientPreference['ClientPreference']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientPreference['Client']['id'], array('controller' => 'clients', 'action' => 'view', $clientPreference['Client']['id'])); ?>
		</td>
		<td><?php echo h($clientPreference['ClientPreference']['storing_as']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['years_of_storage']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['storage_file_format']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['is_color_scan']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['color_dpi']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['shred_or_return']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['no_of_keywords']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientPreference['BillingPlan']['id'], array('controller' => 'billing_plans', 'action' => 'view', $clientPreference['BillingPlan']['id'])); ?>
		</td>
		<td><?php echo h($clientPreference['ClientPreference']['payment_method']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['card_type']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['cc_no']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['name_on_card']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['address_on_card']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['exp_date']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['cvv_no']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['is_shipping']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['shipping_cost']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['shipping_instrns']); ?>&nbsp;</td>
		<td><?php echo h($clientPreference['ClientPreference']['special_instrns']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientPreference['ClientPreference']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientPreference['ClientPreference']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientPreference['ClientPreference']['id']), null, __('Are you sure you want to delete # %s?', $clientPreference['ClientPreference']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('controller' => 'billing_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('controller' => 'billing_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
