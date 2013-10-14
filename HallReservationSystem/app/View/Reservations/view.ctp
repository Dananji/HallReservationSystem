<div class="reservations view">
    <h2><?php echo __('Reservation'); ?></h2>
    <dl>
        <dt><?php echo __('RID'); ?></dt>
        <dd>
            <?php echo h($reservation['Reservation']['rID']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('UID'); ?></dt>
        <dd>
            <?php echo $this->Html->link(h($reservation['Reservation']['uID']), array('controller' => 'Users', 'action' => 'index')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Date'); ?></dt>
        <dd>
            <?php echo h($reservation['Reservation']['date']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Begin Time'); ?></dt>
        <dd>
            <?php echo h($reservation['Reservation']['begin_time']) . " " . h($reservation['Reservation']['begin_meridiem']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('End Time'); ?></dt>
        <dd>
            <?php echo h($reservation['Reservation']['end_time']) . " " . h($reservation['Reservation']['end_meridiem']); ?>
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
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <?php $userID = $this->Session->read('Auth.User.uID'); ?>
        <?php $userRole = $this->Session->read('Auth.User.role'); ?>

        <?php if ($userRole == 'admin'): ?>
            <li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Edit Reservation'), array('action' => 'edit', $reservation['Reservation']['rID'])); ?> </li>
        <?php endif; ?>
        <?php if ($userID == $reservation['Reservation']['uID'] && $userRole == 'user'): ?>
            <li><?php echo $this->Html->link(__('My Reservations'), array('controller' => 'CancelReservation', 'action' => 'index')); ?></li>
            <li><?php echo $this->Form->postLink(__('Cancel Reservation'), array('action' => 'delete', $reservation['Reservation']['rID']), null, __('Are you sure you want to delete reservation %s?', $reservation['Reservation']['rID'])); ?> </li>
        <?php endif; ?>
    </ul>
</div>
