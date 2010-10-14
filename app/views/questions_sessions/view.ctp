<div class="questionsSessions view">
<h2><?php  __('Questions Session');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsSession['QuestionsSession']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsSession['Question']['text'], array('controller' => 'questions', 'action' => 'view', $questionsSession['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Session'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsSession['UserSession']['id'], array('controller' => 'user_sessions', 'action' => 'view', $questionsSession['UserSession']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Correct'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsSession['QuestionsSession']['correct']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Suggestion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsSession['QuestionsSession']['suggestion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('External Click'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsSession['QuestionsSession']['external_click']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questions Session', true), array('action' => 'edit', $questionsSession['QuestionsSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Questions Session', true), array('action' => 'delete', $questionsSession['QuestionsSession']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsSession['QuestionsSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Sessions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Session', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Sessions', true), array('controller' => 'user_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Session', true), array('controller' => 'user_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
