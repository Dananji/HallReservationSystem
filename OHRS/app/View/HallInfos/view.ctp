<div class="hallInfos view">
<h2><?php  echo __('Hall Info'); ?></h2>
	<dl>
		<dt><?php echo __('HID'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['hID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Capacity'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['capacity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['department']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hall Info'), array('action' => 'edit', $hallInfo['HallInfo']['hID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hall Info'), array('action' => 'delete', $hallInfo['HallInfo']['hID']), null, __('Are you sure you want to delete # %s?', $hallInfo['HallInfo']['hID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hall Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
