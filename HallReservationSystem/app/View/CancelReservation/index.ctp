<div class="cancel_reservation index">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'CancelReservation', 'action' => 'index')));?>
    <fieldset>
        <h2>Your Reservations</h2>
        <table cellpadding ="0" cellspacing ="0">
        <tr>
            <th><?php echo 'Hall Name';?></th>
            <th><?php echo 'Description';?></th>
            <th><?php echo 'Date';?></th>
            <th><?php echo 'Time';?></th>
            <th class="actions"><?php echo __('        ');?></th>
        </tr>        
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo h($result['hID']);?>&nbsp;</td>
            <td><?php echo h($result['description']);?>&nbsp;</td>
            <td><?php echo h($result['date']);?>&nbsp;</td>
            <td><?php echo h($result['time']);?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Form->postLink(__('Cancel'), array('action' => 'cancelRecord', $result['hID'], $result['description'], $result['date'], $result['time']
                    )); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php
            if(empty($results)) {
            echo 'There are no reservations.';
            } ?>
    </table>
    </fieldset>
    <?php echo $this->Form->end('Submit')?>
</div>
