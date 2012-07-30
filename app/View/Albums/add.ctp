<div class="albums form">
<?php echo $this->Form->create('Album');?>
	<fieldset>
		<legend><?php echo __('Add Album'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('type'=>'hidden'));
		echo $this->Form->input('title');
		echo $this->Form->input('description', array('rows'=>'5'));
		//echo $this->Form->input('cover_pic_id');
		echo $this->Form->input('created_date');
		echo $this->Form->checkbox('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Albums'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Album Items'), array('controller' => 'album_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Item'), array('controller' => 'album_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
