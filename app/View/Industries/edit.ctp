<div class="industries form">
<?php echo $this->Form->create('Industry');?>
	<fieldset>
		<legend><?php echo __('Edit Industry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('industry_name');
		echo $this->Form->input('industry_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Industry.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Industry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
