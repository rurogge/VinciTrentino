<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('city');
		echo $this->Form->input('address');
		echo $this->Form->input('province_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('personal_code');
		echo $this->Form->input('referral_code');
		echo $this->Form->input('suggestions');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
	</ul>
</div>