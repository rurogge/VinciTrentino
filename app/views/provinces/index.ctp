<div class="provinces index">
	<h2><?php __('Provinces');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('province');?></th>
			<th><?php echo $this->Paginator->sort('inhabitants');?></th>
			<th><?php echo $this->Paginator->sort('num_cities');?></th>
			<th><?php echo $this->Paginator->sort('region_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($provinces as $province):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $province['Province']['id']; ?>&nbsp;</td>
		<td><?php echo $province['Province']['province']; ?>&nbsp;</td>
		<td><?php echo $province['Province']['inhabitants']; ?>&nbsp;</td>
		<td><?php echo $province['Province']['num_cities']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($province['region']['region'], array('controller' => 'regions', 'action' => 'view', $province['region']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $province['Province']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $province['Province']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $province['Province']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $province['Province']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Province', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('controller' => 'regions', 'action' => 'add')); ?> </li>
	</ul>
</div>