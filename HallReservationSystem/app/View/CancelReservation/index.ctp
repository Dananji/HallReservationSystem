<div class="cancel_reservation index">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'CancelReservation', 'action' => 'index')));?>
    <fieldset>
        <h2>Your Reservations</h2>
        <table cellpadding ="0" cellspacing ="0">
        <tr>
            <th><?php echo 'Hall Name';?></th>
            <th><?php echo 'Description';?></th>
            <th><?php echo 'Date';?></th>
            <th><?php echo 'Start time';?></th>
            <th><?php echo 'End time';?></th>
            <th class="actions"><?php echo __('        ');?></th>
        </tr>        
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo h($result['hID']);?>&nbsp;</td>
            <td><?php echo h($result['description']);?>&nbsp;</td>
            <td><?php echo h($result['date']);?>&nbsp;</td>
            <td><?php echo h($result['begin_time'] . " " . h($result['begin_meridiem']));?>&nbsp;</td>
            <td><?php echo h($result['end_time'] . " " . h($result['end_meridiem']));?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Form->postLink('Select', array('controller' => 'Reservations', 'action'=>'view', $result['rID']));?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php
            if(empty($results)) {
            echo 'There are no reservations.';
            } ?>
    </table>
    </fieldset>
</div>
<div class="actions">
    <h3>Actions</h3>
    <li><?php echo $this->Html->link(__('Back to Home'), array('controller' => 'HallReservationSystem', 'action' => 'index'));?></li>
</div>
