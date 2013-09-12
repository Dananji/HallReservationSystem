<div class="reservationTimes view">
<h2><?php  echo __('Reservation Time'); ?></h2>
	<dl>
		<dt><?php echo __('TID'); ?></dt>
		<dd>
			<?php echo h($reservationTime['ReservationTime']['tID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Begin Time'); ?></dt>
		<dd>
			<?php echo h($reservationTime['ReservationTime']['begin_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Begin Meridiem'); ?></dt>
		<dd>
			<?php echo h($reservationTime['ReservationTime']['begin_meridiem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($reservationTime['ReservationTime']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Meridiem'); ?></dt>
		<dd>
			<?php echo h($reservationTime['ReservationTime']['end_meridiem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation Time'), array('action' => 'edit', $reservationTime['ReservationTime']['tID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reservation Time'), array('action' => 'delete', $reservationTime['ReservationTime']['tID']), null, __('Are you sure you want to delete # %s?', $reservationTime['ReservationTime']['tID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Time'), array('action' => 'add')); ?> </li>
	</ul>
</div>
