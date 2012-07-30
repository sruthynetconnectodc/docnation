<div class="callSheets view">
<h2><?php  echo __('Call Sheet');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($callSheet['Client']['id'], array('controller' => 'clients', 'action' => 'view', $callSheet['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Ph No'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['contact_ph_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Email'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['contact_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacted Date'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['contacted_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Contact Date'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['next_contact_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Pickup Date'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['next_pickup_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Box Count'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['expected_box_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrived Box Count'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['arrived_box_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Eta'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['box_eta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking No'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['tracking_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Call Status'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['call_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pickup Status'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['pickup_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Arrived Date'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['box_arrived_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Box Arrived Status On Eta'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['box_arrived_status_on_eta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Notification Status'); ?></dt>
		<dd>
			<?php echo h($callSheet['CallSheet']['email_notification_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Call Sheet'), array('action' => 'edit', $callSheet['CallSheet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Call Sheet'), array('action' => 'delete', $callSheet['CallSheet']['id']), null, __('Are you sure you want to delete # %s?', $callSheet['CallSheet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Call Sheets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Call Sheet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
