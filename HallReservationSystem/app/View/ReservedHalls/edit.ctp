<div class="reservedHalls form">
<?php echo $this->Form->create('ReservedHall'); ?>
	<fieldset>
		<legend><?php echo __('Edit Reserved Hall'); ?></legend>
	<?php
		echo $this->Form->input('rhID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ReservedHall.rhID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ReservedHall.rhID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reserved Halls'), array('action' => 'index')); ?></li>
	</ul>
</div>
