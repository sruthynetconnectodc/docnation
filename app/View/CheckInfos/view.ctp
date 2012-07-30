<div class="checkInfos view">
<h2><?php  echo __('Check Info');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($checkInfo['Client']['id'], array('controller' => 'clients', 'action' => 'view', $checkInfo['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check No'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['check_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Date'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['check_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issuing Company'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['issuing_company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Amount'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['check_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Status'); ?></dt>
		<dd>
			<?php echo h($checkInfo['CheckInfo']['check_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Check Info'), array('action' => 'edit', $checkInfo['CheckInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Check Info'), array('action' => 'delete', $checkInfo['CheckInfo']['id']), null, __('Are you sure you want to delete # %s?', $checkInfo['CheckInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Check Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Check Info'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
