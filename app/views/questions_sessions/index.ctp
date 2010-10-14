<div class="questionsSessions index">
	<h2><?php __('Questions Sessions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('session_id');?></th>
			<th><?php echo $this->Paginator->sort('correct');?></th>
			<th><?php echo $this->Paginator->sort('suggestion');?></th>
			<th><?php echo $this->Paginator->sort('external_click');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questionsSessions as $questionsSession):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $questionsSession['QuestionsSession']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($questionsSession['Question']['text'], array('controller' => 'questions', 'action' => 'view', $questionsSession['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($questionsSession['UserSession']['id'], array('controller' => 'user_sessions', 'action' => 'view', $questionsSession['UserSession']['id'])); ?>
		</td>
		<td><?php echo $questionsSession['QuestionsSession']['correct']; ?>&nbsp;</td>
		<td><?php echo $questionsSession['QuestionsSession']['suggestion']; ?>&nbsp;</td>
		<td><?php echo $questionsSession['QuestionsSession']['external_click']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $questionsSession['QuestionsSession']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $questionsSession['QuestionsSession']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $questionsSession['QuestionsSession']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsSession['QuestionsSession']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Questions Session', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Sessions', true), array('controller' => 'user_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Session', true), array('controller' => 'user_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>