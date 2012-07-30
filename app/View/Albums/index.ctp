<div class="albums index">
	<h2><?php echo __('Albums');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('cover_pic_id');?></th>
			<th><?php echo $this->Paginator->sort('created_date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($albums as $album): ?>
	<tr>
		<td><?php echo h($album['Album']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($album['User']['id'], array('controller' => 'users', 'action' => 'view', $album['User']['id'])); ?>
		</td>
		<td><?php echo h($album['Album']['title']); ?>&nbsp;</td>
		<td><?php echo h($album['Album']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($album['AlbumItem']['id'], array('controller' => 'album_items', 'action' => 'view', $album['AlbumItem']['id'])); ?>
		</td>
		<td><?php echo h($album['Album']['created_date']); ?>&nbsp;</td>
		<td><?php echo h($album['Album']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $album['Album']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $album['Album']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $album['Album']['id']), null, __('Are you sure you want to delete # %s?', $album['Album']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Album'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Album Items'), array('controller' => 'album_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album Item'), array('controller' => 'album_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
