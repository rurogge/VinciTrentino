<div class="regions form">
<?php echo $this->Form->create('Region');?>
	<fieldset>
 		<legend><?php __('Add Region'); ?></legend>
	<?php
		echo $this->Form->input('region');
		echo $this->Form->input('num_inhabitants');
		echo $this->Form->input('num_cities');
		echo $this->Form->input('num_provinces');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regions', true), array('action' => 'index'));?></li>
	</ul>
</div>