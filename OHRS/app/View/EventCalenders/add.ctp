<div class="eventCalenders form">
<?php echo $this->Form->create('EventCalender'); ?>
	<fieldset>
		<legend><?php echo __('Add Event Calender'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('time');
		echo $this->Form->input('reserved');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Event Calenders'), array('action' => 'index')); ?></li>
	</ul>
</div>
