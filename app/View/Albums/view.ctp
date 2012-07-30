<div class="albums view">
<h2><?php  echo __('Album');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($album['Album']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($album['User']['id'], array('controller' => 'users', 'action' => 'view', $album['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($album['Album']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($album['Album']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Album Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($album['AlbumItem']['id'], array('controller' => 'album_items', 'action' => 'view', $album['AlbumItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($album['Album']['created_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($album['Album']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Album'), array('action' => 'edit', $album['Album']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Album'), array('action' => 'delete', $album['Album']['id']), null, __('Are you sure you want to delete # %s?', $album['Album']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Albums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Album Items'), array('controller' => 'album_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Item'), array('controller' => 'album_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Album Items');?></h3>
	<?php if (!empty($album['AlbumItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Album Id'); ?></th>
		<th><?php echo __('Item'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Item Type'); ?></th>
		<th><?php echo __('Item Extension'); ?></th>
		<th><?php echo __('Modified Date'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($album['AlbumItem'] as $albumItem): ?>
		<tr>
			<td><?php echo $albumItem['id'];?></td>
			<td><?php echo $albumItem['album_id'];?></td>
			<td><?php echo $albumItem['item'];?></td>
			<td><?php echo $albumItem['description'];?></td>
			<td><?php echo $albumItem['item_type'];?></td>
			<td><?php echo $albumItem['item_extension'];?></td>
			<td><?php echo $albumItem['modified_date'];?></td>
			<td><?php echo $albumItem['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'album_items', 'action' => 'view', $albumItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'album_items', 'action' => 'edit', $albumItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'album_items', 'action' => 'delete', $albumItem['id']), null, __('Are you sure you want to delete # %s?', $albumItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Album Item'), array('controller' => 'album_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
