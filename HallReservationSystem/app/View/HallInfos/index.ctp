<div class="hallInfos index">
    <h2><?php echo __('Hall Infos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('hID'); ?></th>
            <th><?php echo $this->Paginator->sort('hall_name'); ?></th>
            <th><?php echo $this->Paginator->sort('cap_min'); ?></th>
            <th><?php echo $this->Paginator->sort('cap_max'); ?></th>
            <th><?php echo $this->Paginator->sort('dep_code'); ?></th>
            <th><?php echo $this->Paginator->sort('location'); ?></th>
            <th><?php echo $this->Paginator->sort('hall_description'); ?></th>
            <th><?php echo $this->Paginator->sort('reserved'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php $userRole = $this->Session->read('Auth.User.role'); ?>
        <?php foreach ($hallInfos as $hallInfo): ?>
            <tr>
                <td><?php echo h($hallInfo['HallInfo']['id']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['hID']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['hall_name']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['cap_min']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['cap_max']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['dep_code']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['location']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['hall_description']); ?>&nbsp;</td>
                <td><?php echo h($hallInfo['HallInfo']['reserved']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $hallInfo['HallInfo']['id'])); ?>
                    <?php if ($userRole == 'admin'): ?>
                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hallInfo['HallInfo']['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hallInfo['HallInfo']['id']), null, __('Are you sure you want to delete # %s?', $hallInfo['HallInfo']['id'])); ?>
                    <?php endif; ?>
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
<?php if ($userRole == 'admin'): ?>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>
            <li><?php echo $this->Html->link(__('New Hall Info'), array('action' => 'add')); ?></li>
        </ul>
    </div>
<?php endif; ?>