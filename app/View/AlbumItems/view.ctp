<div class="albumItems view">
<h2><?php  echo __('Album Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Album'); ?></dt>
		<dd>
			<?php echo $this->Html->link($albumItem['Album']['title'], array('controller' => 'albums', 'action' => 'view', $albumItem['Album']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Type'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['item_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Extension'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['item_extension']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Date'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['modified_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($albumItem['AlbumItem']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Album Item'), array('action' => 'edit', $albumItem['AlbumItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Album Item'), array('action' => 'delete', $albumItem['AlbumItem']['id']), null, __('Are you sure you want to delete # %s?', $albumItem['AlbumItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Album Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albums'), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albums', 'action' => 'add')); ?> </li>
	</ul>
</div>
