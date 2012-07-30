<div class="billingPlans form">
<?php echo $this->Form->create('BillingPlan');?>
	<fieldset>
		<legend><?php echo __('Edit Billing Plan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('billing_plan_name');
		echo $this->Form->input('billing_plan_amount');
		echo $this->Form->input('billing_frequency');
		echo $this->Form->input('charge_per');
		echo $this->Form->input('billing_plan_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BillingPlan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BillingPlan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('controller' => 'client_preferences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('controller' => 'client_preferences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
