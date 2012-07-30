<div class="albumItems form">
<?php echo $this->Form->create('AlbumItem');?>
	<fieldset>
		<legend><?php echo __('Edit Album Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('album_id');
		echo $this->Form->input('item');
		echo $this->Form->input('description');
		echo $this->Form->input('item_type');
		echo $this->Form->input('item_extension');
		echo $this->Form->input('modified_date');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AlbumItem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AlbumItem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Album Items'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albums'), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albums', 'action' => 'add')); ?> </li>
	</ul>
</div>
