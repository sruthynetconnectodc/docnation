<div class="industries index">
	<h2><?php echo __('Industries');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('industry_name');?></th>
			<th><?php echo $this->Paginator->sort('industry_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($industries as $industry): ?>
	<tr>
		<td><?php echo h($industry['Industry']['id']); ?>&nbsp;</td>
		<td><?php echo h($industry['Industry']['industry_name']); ?>&nbsp;</td>
		<td><?php echo h($industry['Industry']['industry_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $industry['Industry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $industry['Industry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $industry['Industry']['id']), null, __('Are you sure you want to delete # %s?', $industry['Industry']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Industry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
