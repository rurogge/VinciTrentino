<div class="provinces form">
<?php echo $this->Form->create('Province');?>
	<fieldset>
 		<legend><?php __('Add Province'); ?></legend>
	<?php
		echo $this->Form->input('province');
		echo $this->Form->input('inhabitants');
		echo $this->Form->input('num_cities');
		echo $this->Form->input('region_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provinces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Regions', true), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region', true), array('controller' => 'regions', 'action' => 'add')); ?> </li>
	</ul>
</div>