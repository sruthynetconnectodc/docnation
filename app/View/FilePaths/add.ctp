<div class="filePaths form">
<?php echo $this->Form->create('FilePath');?>
	<fieldset>
		<legend><?php echo __('Add File Path'); ?></legend>
	<?php
		echo $this->Form->input('file_path_name');
		echo $this->Form->input('file_path_location');
		echo $this->Form->input('file_path_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List File Paths'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
