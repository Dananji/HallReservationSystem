<div class="select_hall">
    <h2>Select the Hall</h2>
    <table cellpadding ="0" cellspacing ="0">
        <tr>
            <th><?php echo 'Hall ID';?></th>
            <th><?php echo 'Hall Name';?></th>
            <th><?php echo 'Location';?></th>
            <th class="actions"><?php echo __('        ');?></th>
        </tr>        
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo h($result['hID']);?>&nbsp;</td>
            <td><?php echo h($result['hall_name']);?>&nbsp;</td>
            <td><?php echo h($result['location']);?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Form->postLink(__('Select'), array('action' => 'selectHall', $result['hID'], $result['hall_name'], $result['location']
                    )); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php
            if(empty($results)) {
            echo 'There are no matching halls.';
            } ?>
    </table>
    <table>
            <tr>
                <td class="actions">
                    <?php echo $this->Html->link(__('Back'), array('action' => 'index'));?>
                </td>
            </tr>
        </table>
</div>
