<div class="reservations form">
<?php echo $this->Form->create('Reservation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reservation'); ?></legend>
	<?php
		echo $this->Form->input('rID');
		echo $this->Form->input('date');
		echo $this->Form->input('time');
		echo $this->Form->input('hID');
		echo $this->Form->input('uID');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Reservation.rID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Reservation.rID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?></li>
	</ul>
</div>
