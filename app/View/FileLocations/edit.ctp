<div class="fileLocations form">
<?php echo $this->Form->create('FileLocation');?>
	<fieldset>
		<legend><?php echo __('Edit File Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('file_location_name');
		echo $this->Form->input('file_location_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FileLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FileLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List File Locations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
