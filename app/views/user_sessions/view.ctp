<div class="userSessions view">
<h2><?php  __('User Session');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userSession['UserSession']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userSession['User']['name'], array('controller' => 'users', 'action' => 'view', $userSession['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userSession['UserSession']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userSession['UserSession']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Correct Answers Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userSession['UserSession']['correct_answers_number']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Session', true), array('action' => 'edit', $userSession['UserSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User Session', true), array('action' => 'delete', $userSession['UserSession']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userSession['UserSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Sessions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Session', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Sessions', true), array('controller' => 'questions_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Sessions', true), array('controller' => 'questions_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Questions Sessions');?></h3>
	<?php if (!empty($userSession['questions_sessions'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('Session Id'); ?></th>
		<th><?php __('Correct'); ?></th>
		<th><?php __('Suggestion'); ?></th>
		<th><?php __('External Click'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userSession['questions_sessions'] as $questionsSessions):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $questionsSessions['id'];?></td>
			<td><?php echo $questionsSessions['question_id'];?></td>
			<td><?php echo $questionsSessions['session_id'];?></td>
			<td><?php echo $questionsSessions['correct'];?></td>
			<td><?php echo $questionsSessions['suggestion'];?></td>
			<td><?php echo $questionsSessions['external_click'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'questions_sessions', 'action' => 'view', $questionsSessions['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'questions_sessions', 'action' => 'edit', $questionsSessions['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'questions_sessions', 'action' => 'delete', $questionsSessions['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsSessions['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Questions Sessions', true), array('controller' => 'questions_sessions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
