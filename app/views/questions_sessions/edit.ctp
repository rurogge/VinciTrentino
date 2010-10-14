<div class="questionsSessions form">
<?php echo $this->Form->create('QuestionsSession');?>
	<fieldset>
 		<legend><?php __('Edit Questions Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question_id');
		echo $this->Form->input('session_id');
		echo $this->Form->input('correct');
		echo $this->Form->input('suggestion');
		echo $this->Form->input('external_click');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('QuestionsSession.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('QuestionsSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Questions Sessions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Sessions', true), array('controller' => 'user_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Session', true), array('controller' => 'user_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>