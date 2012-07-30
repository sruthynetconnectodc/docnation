<div class="albumItems index">
	<h2><?php echo __('Album Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('album_id');?></th>
			<th><?php echo $this->Paginator->sort('item');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('item_type');?></th>
			<th><?php echo $this->Paginator->sort('item_extension');?></th>
			<th><?php echo $this->Paginator->sort('modified_date');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($albumItems as $albumItem): ?>
	<tr>
		<td><?php echo h($albumItem['AlbumItem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($albumItem['Album']['title'], array('controller' => 'albums', 'action' => 'view', $albumItem['Album']['id'])); ?>
		</td>
		<td><?php echo h($albumItem['AlbumItem']['item']); ?>&nbsp;</td>
		<td><?php echo h($albumItem['AlbumItem']['description']); ?>&nbsp;</td>
		<td><?php echo h($albumItem['AlbumItem']['item_type']); ?>&nbsp;</td>
		<td><?php echo h($albumItem['AlbumItem']['item_extension']); ?>&nbsp;</td>
		<td><?php echo h($albumItem['AlbumItem']['modified_date']); ?>&nbsp;</td>
		<td><?php echo h($albumItem['AlbumItem']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $albumItem['AlbumItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $albumItem['AlbumItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $albumItem['AlbumItem']['id']), null, __('Are you sure you want to delete # %s?', $albumItem['AlbumItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Album Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albums'), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albums', 'action' => 'add')); ?> </li>
	</ul>
</div>
