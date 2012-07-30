<div class="proposals view">
<h2><?php  echo __('Proposal');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proposal['Client']['id'], array('controller' => 'clients', 'action' => 'view', $proposal['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Email Status'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['client_email_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Date'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['email_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Contact Date'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['next_contact_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Response'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['client_response']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proposed Date'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['proposed_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proposal Status'); ?></dt>
		<dd>
			<?php echo h($proposal['Proposal']['proposal_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proposal'), array('action' => 'edit', $proposal['Proposal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proposal'), array('action' => 'delete', $proposal['Proposal']['id']), null, __('Are you sure you want to delete # %s?', $proposal['Proposal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proposals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proposal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
