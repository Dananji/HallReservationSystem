<div class="hallInfos view">
<h2><?php  echo __('Hall Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HID'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['hID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hall Name'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['hall_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cap Min'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['cap_min']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cap Max'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['cap_max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dep Code'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['dep_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($hallInfo['HallInfo']['location']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hall Info'), array('action' => 'edit', $hallInfo['HallInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hall Info'), array('action' => 'delete', $hallInfo['HallInfo']['id']), null, __('Are you sure you want to delete # %s?', $hallInfo['HallInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hall Infos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hall Info'), array('action' => 'add')); ?> </li>
	</ul>
</div>
