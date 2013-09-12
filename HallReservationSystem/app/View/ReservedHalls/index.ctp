<div class="reservedHalls index">
	<h2><?php echo __('Reserved Halls'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('rhID'); ?></th>
			<th><?php echo $this->Paginator->sort('hID'); ?></th>
			<th><?php echo $this->Paginator->sort('reserve_time_start'); ?></th>
			<th><?php echo $this->Paginator->sort('reserve_time_end'); ?></th>
			<th><?php echo $this->Paginator->sort('reserve_date'); ?></th>
			<th><?php echo $this->Paginator->sort('reserved'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reservedHalls as $reservedHall): ?>
	<tr>
		<td><?php echo h($reservedHall['ReservedHall']['rhID']); ?>&nbsp;</td>
		<td><?php echo h($reservedHall['ReservedHall']['hID']); ?>&nbsp;</td>
		<td><?php echo h($reservedHall['ReservedHall']['reserve_time_start']); ?>&nbsp;</td>
		<td><?php echo h($reservedHall['ReservedHall']['reserve_time_end']); ?>&nbsp;</td>
		<td><?php echo h($reservedHall['ReservedHall']['reserve_date']); ?>&nbsp;</td>
		<td><?php echo h($reservedHall['ReservedHall']['reserved']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reservedHall['ReservedHall']['rhID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reservedHall['ReservedHall']['rhID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservedHall['ReservedHall']['rhID']), null, __('Are you sure you want to delete # %s?', $reservedHall['ReservedHall']['rhID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reserved Hall'), array('action' => 'add')); ?></li>
	</ul>
</div>
