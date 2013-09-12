<div class="reservationTimes form">
<?php echo $this->Form->create('ReservationTime'); ?>
	<fieldset>
		<legend><?php echo __('Add Reservation Time'); ?></legend>
	<?php
		echo $this->Form->input('begin_time');
		echo $this->Form->input('begin_meridiem');
		echo $this->Form->input('end_time');
		echo $this->Form->input('end_meridiem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reservation Times'), array('action' => 'index')); ?></li>
	</ul>
</div>
