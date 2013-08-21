<div class="hallInfos form">
<?php echo $this->Form->create('HallInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hall Info'); ?></legend>
	<?php
		echo $this->Form->input('hID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HallInfo.hID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HallInfo.hID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hall Infos'), array('action' => 'index')); ?></li>
	</ul>
</div>
