<div class="hallInfos form">
<?php echo $this->Form->create('HallInfo'); ?>
	<fieldset>
		<legend><?php echo __('Add Hall Info'); ?></legend>
	<?php
		echo $this->Form->input('capacity');
		echo $this->Form->input('location');
		echo $this->Form->input('department');
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
