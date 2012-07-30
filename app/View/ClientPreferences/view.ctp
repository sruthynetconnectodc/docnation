<div class="clientPreferences view">
<h2><?php  echo __('Client Preference');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientPreference['Client']['id'], array('controller' => 'clients', 'action' => 'view', $clientPreference['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Storing As'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['storing_as']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Years Of Storage'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['years_of_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Storage File Format'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['storage_file_format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Color Scan'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['is_color_scan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Dpi'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['color_dpi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shred Or Return'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['shred_or_return']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Keywords'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['no_of_keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Plan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientPreference['BillingPlan']['id'], array('controller' => 'billing_plans', 'action' => 'view', $clientPreference['BillingPlan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Method'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['payment_method']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Type'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['card_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cc No'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['cc_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name On Card'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['name_on_card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address On Card'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['address_on_card']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exp Date'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['exp_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cvv No'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['cvv_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Shipping'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['is_shipping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Cost'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['shipping_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Instrns'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['shipping_instrns']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Instrns'); ?></dt>
		<dd>
			<?php echo h($clientPreference['ClientPreference']['special_instrns']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Preference'), array('action' => 'edit', $clientPreference['ClientPreference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Client Preference'), array('action' => 'delete', $clientPreference['ClientPreference']['id']), null, __('Are you sure you want to delete # %s?', $clientPreference['ClientPreference']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Preferences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Preference'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Plans'), array('controller' => 'billing_plans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Plan'), array('controller' => 'billing_plans', 'action' => 'add')); ?> </li>
	</ul>
</div>
