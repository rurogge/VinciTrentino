<div class="regions view">
<h2><?php  __('Region');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Region'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['region']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Num Inhabitants'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['num_inhabitants']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Num Cities'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['num_cities']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Num Provinces'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $region['Region']['num_provinces']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Region', true), array('action' => 'edit', $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Region', true), array('action' => 'delete', $region['Region']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $region['Region']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
