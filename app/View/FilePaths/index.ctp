<div class="filePaths index">
	<h2><?php echo __('File Paths');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('file_path_name');?></th>
			<th><?php echo $this->Paginator->sort('file_path_location');?></th>
			<th><?php echo $this->Paginator->sort('file_path_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($filePaths as $filePath): ?>
	<tr>
		<td><?php echo h($filePath['FilePath']['id']); ?>&nbsp;</td>
		<td><?php echo h($filePath['FilePath']['file_path_name']); ?>&nbsp;</td>
		<td><?php echo h($filePath['FilePath']['file_path_location']); ?>&nbsp;</td>
		<td><?php echo h($filePath['FilePath']['file_path_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $filePath['FilePath']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $filePath['FilePath']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $filePath['FilePath']['id']), null, __('Are you sure you want to delete # %s?', $filePath['FilePath']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New File Path'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List File Documents'), array('controller' => 'file_documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New File Document'), array('controller' => 'file_documents', 'action' => 'add')); ?> </li>
	</ul>
</div>
