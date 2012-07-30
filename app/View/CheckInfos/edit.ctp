<div class="checkInfos form">
<?php echo $this->Form->create('CheckInfo');?>
	<fieldset>
		<legend><?php echo __('Edit Check Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('check_no');
		echo $this->Form->input('check_date');
		echo $this->Form->input('issuing_company');
		echo $this->Form->input('check_amount');
		echo $this->Form->input('check_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CheckInfo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CheckInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Check Infos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
