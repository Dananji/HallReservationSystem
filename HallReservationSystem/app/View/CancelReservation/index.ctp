<div class="cancel_reservation">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'CancelReservation', 'action' => 'index')));?>
    <fieldset>
        <h2>Your Reservations</h2>
        <table cellpadding ="0" cellspacing ="0">
        <tr>
            <th><?php echo 'Hall ID';?></th>
            <th><?php echo 'Description';?></th>
            <th><?php echo 'Date';?></th>
            <th><?php echo 'Start Time';?></th>
            <th><?php echo 'End Time';?></th>
            <th class="actions"><?php echo __('        ');?></th>
        </tr>        
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo h($result['hID']);?>&nbsp;</td>
            <td><?php echo h($result['description']);?>&nbsp;</td>
            <td><?php echo h($result['date']);?>&nbsp;</td>
            <td><?php echo h($result['begin_time']." ".$result['begin_meridiem']);?>&nbsp;</td>
            <td><?php echo h($result['end_time']." ").$result['end_meridiem'];?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Form->postLink(__('Select'), array('action' => 'cancelRecord', $result['hID'], $result['description'], $result['date'], $result['begin_time'], $result['end_time']
                    )); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php
            if(empty($results)) {
            echo 'You have no reservations.';
            } ?>
    </table>
    </fieldset>
</div>
