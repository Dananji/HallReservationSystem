<div class="reservedHalls view">
<h2><?php  echo __('Reserved Hall'); ?></h2>
	<dl>
		<dt><?php echo __('RhID'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['rhID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HID'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['hID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserve Time Start'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['reserve_time_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserve Time End'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['reserve_time_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserve Date'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['reserve_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reserved'); ?></dt>
		<dd>
			<?php echo h($reservedHall['ReservedHall']['reserved']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserved Hall'), array('action' => 'edit', $reservedHall['ReservedHall']['rhID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reserved Hall'), array('action' => 'delete', $reservedHall['ReservedHall']['rhID']), null, __('Are you sure you want to delete # %s?', $reservedHall['ReservedHall']['rhID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reserved Halls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserved Hall'), array('action' => 'add')); ?> </li>
	</ul>
</div>
