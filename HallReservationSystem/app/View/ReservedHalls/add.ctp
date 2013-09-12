<div class="reservedHalls form">
<?php echo $this->Form->create('ReservedHall'); ?>
	<fieldset>
		<legend><?php echo __('Add Reserved Hall'); ?></legend>
	<?php
		echo $this->Form->input('hID');
		echo $this->Form->input('reserve_time_start');
		echo $this->Form->input('reserve_time_end');
		echo $this->Form->input('reserve_date');
		echo $this->Form->input('reserved');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reserved Halls'), array('action' => 'index')); ?></li>
	</ul>
</div>
