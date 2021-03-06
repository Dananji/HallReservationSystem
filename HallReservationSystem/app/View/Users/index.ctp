<div class="users index">
    <h2>Users</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>UID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th class="actions">Actions</th>
        </tr>
        <?php $userRole = $this->Session->read('Auth.User.role'); ?>
        <?php
        $i = 0;
        foreach ($users as $user):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $user['User']['id']; ?>&nbsp;</td>
                <td><?php echo $user['User']['uID']; ?>&nbsp;</td>
                <td><?php echo $user['User']['name']; ?>&nbsp;</td>
                <td><?php echo $user['User']['username']; ?>&nbsp;</td>
                <td><?php echo $user['User']['email']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
                    <?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
                        <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
                        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure you want to delete that user?')); ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <?php if ($userRole == 'admin'): ?>
            <li><?php echo $this->Html->link('Add New User', array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Back'), array('controller' => 'HallReservationSystem', 'action' => 'index')); ?></li>
        <?php endif; ?>
        <?php if ($userRole == null): ?>
            <li><?php echo $this->Html->link(__('Back'), array('controller' => 'Reservations', 'action' => 'index')); ?></li>
        <?php endif; ?>
    </ul>
</div>


