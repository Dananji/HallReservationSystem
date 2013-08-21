<div class="eventCalenders view">
<h2><?php  echo __('Event Calender'); ?></h2>
	<dl>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($eventCalender['EventCalender']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($eventCalender['EventCalender']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserved'); ?></dt>
		<dd>
			<?php echo h($eventCalender['EventCalender']['reserved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($eventCalender['EventCalender']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Calender'), array('action' => 'edit', $eventCalender['EventCalender']['date, time'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Calender'), array('action' => 'delete', $eventCalender['EventCalender']['date, time']), null, __('Are you sure you want to delete # %s?', $eventCalender['EventCalender']['date, time'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Calenders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Calender'), array('action' => 'add')); ?> </li>
	</ul>
</div>
