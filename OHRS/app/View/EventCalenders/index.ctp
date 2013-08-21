<div class="eventCalenders index">
	<h2><?php echo __('Event Calenders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('reserved'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($eventCalenders as $eventCalender): ?>
	<tr>
		<td><?php echo h($eventCalender['EventCalender']['date']); ?>&nbsp;</td>
		<td><?php echo h($eventCalender['EventCalender']['time']); ?>&nbsp;</td>
		<td><?php echo h($eventCalender['EventCalender']['reserved']); ?>&nbsp;</td>
		<td><?php echo h($eventCalender['EventCalender']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventCalender['EventCalender']['date, time'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventCalender['EventCalender']['date, time'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventCalender['EventCalender']['date, time']), null, __('Are you sure you want to delete # %s?', $eventCalender['EventCalender']['date, time'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Event Calender'), array('action' => 'add')); ?></li>
	</ul>
</div>
