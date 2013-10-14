<div class="reservations index">
    <h2><?php echo __('Reservations'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('date'); ?></th>
            <th><?php echo $this->Paginator->sort('begin_time'); ?></th>
            <th><?php echo $this->Paginator->sort('end_time'); ?></th>
            <th><?php echo $this->Paginator->sort('hID'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php $userRole = $this->Session->read('Auth.User.role'); ?>
        <?php $today = date("Y-m-d"); ?>
        <?php $realDay = date("Y-m-d", strtotime($today . "+2 days")); ?>

        <?php foreach ($reservations as $reservation): ?>
            <tr>
                <?php if ($userRole == 'admin'): ?>
                    <?php if (h($reservation['Reservation']['date']) == $realDay && h($reservation['Reservation']['mail_sent']) == false): ?>
                        <td><?php echo h($reservation['Reservation']['date']); ?>&nbsp;</td>
                        <td><?php echo h($reservation['Reservation']['begin_time'] . " " . $reservation['Reservation']['begin_meridiem']); ?>&nbsp;</td>
                        <td><?php echo h($reservation['Reservation']['end_time'] . " " . $reservation['Reservation']['end_meridiem']); ?>&nbsp;</td>
                        <td><?php echo $this->Html->link(h($reservation['Reservation']['hID']), array('controller' => 'HallInfos', 'action' => 'index')); ?>&nbsp;</td>
                        <td><?php echo h($reservation['Reservation']['description']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $reservation['Reservation']['rID'])); ?>
                            <?php if ($userRole == 'admin'): ?>
                                <?php echo $this->Html->link(__('Send Mail'), array('controller' => 'Email', 'action' => 'sendMail')); ?>
                            <?php endif; ?>
                        </td>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if ($userRole == null): ?>
                    <td><?php echo h($reservation['Reservation']['date']); ?>&nbsp;</td>
                    <td><?php echo h($reservation['Reservation']['begin_time'] . " " . $reservation['Reservation']['begin_meridiem']); ?>&nbsp;</td>
                    <td><?php echo h($reservation['Reservation']['end_time'] . " " . $reservation['Reservation']['end_meridiem']); ?>&nbsp;</td>
                    <td><?php echo $this->Html->link(h($reservation['Reservation']['hID']), array('controller' => 'HallInfos', 'action' => 'index')); ?>&nbsp;</td>
                    <td><?php echo h($reservation['Reservation']['description']); ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $reservation['Reservation']['rID'])); ?>                        
                    </td>
                <?php endif; ?>
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
        <?php if ($userRole == 'admin'): ?>
            <li><?php echo $this->Html->link(__('Back'), array('controller' => 'HallReservationSystem', 'action' => 'index')); ?></li>
        <?php endif; ?>
        <?php if ($userRole == null): ?>
            <li><?php echo $this->Html->link(__('Back'), array('controller' => 'Users', 'action' => 'login')); ?></li>
        <?php endif; ?>
    </ul>
</div>
