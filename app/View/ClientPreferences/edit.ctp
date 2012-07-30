<div class="clientPreferences form">
<?php echo $this->Form->create('ClientPreference');?>
	<fieldset>
		<legend><?php echo __('Edit Client Preference'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('storing_as');
		echo $this->Form->input('years_of_storage');
		echo $this->Form->input('storage_file_format');
		echo $this->Form->input('is_color_scan');
		echo $this->Form->input('color_dpi');
		echo $this->Form->input('shred_or_return');
		echo $this->Form->input('no_of_keywords');
		echo $this->Form->input('billing_plan_id');
		echo $this->Form->input('payment_method');
		echo $this->Form->input('card_type');
		echo $this->Form->input('cc_no');
		echo $this->Form->input('name_on_card');
		echo $this->Form->input('address_on_card');
		echo $this->Form->input('exp_date');
		echo $this->Form->input('cvv_no');
		echo $this->Form->input('is_shipping');
		echo $this->Form->input('shipping_cost');
		echo $this->Form->input('shipping_instrns');
		echo $this->Form->input('special_instrns');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientPreference.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClientPreference.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('controller' => 'billing_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('controller' => 'billing_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
