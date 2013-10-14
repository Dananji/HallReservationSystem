<?php echo $this->Form->create($model = false, array('url' => array('controller' => 'HallReservationSystem', 'action' => 'index'))); ?>
<div style="font-size: 36px;">Choose Action to Perform</div>

<div>
    <style type="text/css">
        label{padding-left: 5px;}
        label{padding-bottom: 8px;}
    </style>
    <?php
    $options = array(
        'reserve' => '&nbsp;&nbsp;Make a Reservation',
        'cancel' => '&nbsp;&nbsp;Cancel a Reservation'
    );
    $attributes = array(
        'legend' => false
    );
    echo $this->Form->radio('task', $options, $attributes);
    ?>
</div>
<?php echo $this->Form->end('Submit') ?>

<?php if ($this->Session->read('Auth.User.role') == 'admin'): ?>
    <div style="font-size: 30px;">Administrative Tasks</div>
    <br>
    <br>
    <td class="actions">

        <?php echo $this->Html->link(__('Go to Reservations'), array('controller' => 'Reservations', 'action' => 'index')); ?>
        <br>
        <br>
        <?php echo $this->Html->link(__('Edit Halls'), array('controller' => 'HallInfos', 'action' => 'index')); ?>
        <br>
        <br>
        <?php echo $this->Html->link(__('Edit Users'), array('controller' => 'Users', 'action' => 'index')); ?>
    <?php endif; ?>
</td>

