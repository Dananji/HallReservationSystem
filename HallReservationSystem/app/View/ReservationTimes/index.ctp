<div class="reservationTimes index">
	<h2><?php echo __('Reservation Times'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tID'); ?></th>
			<th><?php echo $this->Paginator->sort('begin_time'); ?></th>
			<th><?php echo $this->Paginator->sort('begin_meridiem'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_meridiem'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reservationTimes as $reservationTime): ?>
	<tr>
		<td><?php echo h($reservationTime['ReservationTime']['tID']); ?>&nbsp;</td>
		<td><?php echo h($reservationTime['ReservationTime']['begin_time']); ?>&nbsp;</td>
		<td><?php echo h($reservationTime['ReservationTime']['begin_meridiem']); ?>&nbsp;</td>
		<td><?php echo h($reservationTime['ReservationTime']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($reservationTime['ReservationTime']['end_meridiem']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reservationTime['ReservationTime']['tID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reservationTime['ReservationTime']['tID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservationTime['ReservationTime']['tID']), null, __('Are you sure you want to delete # %s?', $reservationTime['ReservationTime']['tID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reservation Time'), array('action' => 'add')); ?></li>
	</ul>
</div>
