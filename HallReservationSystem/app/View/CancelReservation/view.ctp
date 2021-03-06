<div class="reservations view">
<h2><?php  echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('RID'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['rID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UID'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['uID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meridiem'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['meridiem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HID'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['hID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reservation Locked'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['reservation_locked']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
	</ul>
</div>