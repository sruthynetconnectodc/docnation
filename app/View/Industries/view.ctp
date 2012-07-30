<div class="industries view">
<h2><?php  echo __('Industry');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry Name'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['industry_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry Status'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['industry_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Industry'), array('action' => 'edit', $industry['Industry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Industry'), array('action' => 'delete', $industry['Industry']['id']), null, __('Are you sure you want to delete # %s?', $industry['Industry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clients');?></h3>
	<?php if (!empty($industry['Client'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Industry Id'); ?></th>
		<th><?php echo __('Company Name'); ?></th>
		<th><?php echo __('Company Acronym'); ?></th>
		<th><?php echo __('Authority'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Contact Name'); ?></th>
		<th><?php echo __('Contact Telephone No'); ?></th>
		<th><?php echo __('Contact Position'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Client Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($industry['Client'] as $client): ?>
		<tr>
			<td><?php echo $client['id'];?></td>
			<td><?php echo $client['industry_id'];?></td>
			<td><?php echo $client['company_name'];?></td>
			<td><?php echo $client['company_acronym'];?></td>
			<td><?php echo $client['authority'];?></td>
			<td><?php echo $client['city'];?></td>
			<td><?php echo $client['state'];?></td>
			<td><?php echo $client['zip'];?></td>
			<td><?php echo $client['address'];?></td>
			<td><?php echo $client['telephone'];?></td>
			<td><?php echo $client['fax'];?></td>
			<td><?php echo $client['email'];?></td>
			<td><?php echo $client['contact_name'];?></td>
			<td><?php echo $client['contact_telephone_no'];?></td>
			<td><?php echo $client['contact_position'];?></td>
			<td><?php echo $client['user_id'];?></td>
			<td><?php echo $client['client_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clients', 'action' => 'view', $client['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clients', 'action' => 'edit', $client['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clients', 'action' => 'delete', $client['id']), null, __('Are you sure you want to delete # %s?', $client['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
