<div class="billingPlans index">
	<h2><?php echo __('Billing Plans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('billing_plan_name');?></th>
			<th><?php echo $this->Paginator->sort('billing_plan_amount');?></th>
			<th><?php echo $this->Paginator->sort('billing_frequency');?></th>
			<th><?php echo $this->Paginator->sort('charge_per');?></th>
			<th><?php echo $this->Paginator->sort('billing_plan_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($billingPlans as $billingPlan): ?>
	<tr>
		<td><?php echo h($billingPlan['BillingPlan']['id']); ?>&nbsp;</td>
		<td><?php echo h($billingPlan['BillingPlan']['billing_plan_name']); ?>&nbsp;</td>
		<td><?php echo h($billingPlan['BillingPlan']['billing_plan_amount']); ?>&nbsp;</td>
		<td><?php echo h($billingPlan['BillingPlan']['billing_frequency']); ?>&nbsp;</td>
		<td><?php echo h($billingPlan['BillingPlan']['charge_per']); ?>&nbsp;</td>
		<td><?php echo h($billingPlan['BillingPlan']['billing_plan_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $billingPlan['BillingPlan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $billingPlan['BillingPlan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $billingPlan['BillingPlan']['id']), null, __('Are you sure you want to delete # %s?', $billingPlan['BillingPlan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('controller' => 'client_preferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('controller' => 'client_preferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
