<div class="cities view">
<h2><?php  __('City');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $city['City']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $city['City']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($city['Province']['province'], array('controller' => 'provinces', 'action' => 'view', $city['Province']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City', true), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete City', true), array('action' => 'delete', $city['City']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
