<div class="userSessions form">
<?php echo $this->Form->create('UserSession');?>
	<fieldset>
 		<legend><?php __('Edit User Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('correct_answers_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UserSession.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UserSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Sessions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Sessions', true), array('controller' => 'questions_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Sessions', true), array('controller' => 'questions_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>