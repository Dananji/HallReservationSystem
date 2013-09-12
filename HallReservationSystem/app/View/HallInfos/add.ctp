<div class="hallInfos form">
<?php echo $this->Form->create('HallInfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Hall Info'); ?></legend>
	<?php
		echo $this->Form->input('hID');
		echo $this->Form->input('hall_name');
		echo $this->Form->input('cap_min');
		echo $this->Form->input('cap_max');
		echo $this->Form->input('dep_code');
		echo $this->Form->input('location');
		echo $this->Form->input('hall_description');
		echo $this->Form->input('reserved');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hall Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
