<div class="fileLocations form">
<?php echo $this->Form->create('FileLocation');?>
	<fieldset>
		<legend><?php echo __('Add File Location'); ?></legend>
	<?php
		echo $this->Form->input('file_location_name');
		echo $this->Form->input('file_location_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Locations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
