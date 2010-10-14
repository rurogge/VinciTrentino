<div class="provinces view">
<h2><?php  __('Province');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inhabitants'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['inhabitants']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Num Cities'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['num_cities']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Region'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($province['region']['region'], array('controller' => 'regions', 'action' => 'view', $province['region']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province', true), array('action' => 'edit', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Province', true), array('action' => 'delete', $province['Province']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('controller' => 'regions', 'action' => 'add')); ?> </li>
	</ul>
</div>
