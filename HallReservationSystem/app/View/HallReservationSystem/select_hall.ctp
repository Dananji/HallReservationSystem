<div class="select_hall">
    <h2>Select the Hall</h2>
    <table cellpadding ="0" cellspacing ="0">
        <tr>
            <th><?php echo 'Hall ID';?></th>
            <th><?php echo 'Hall Name';?></th>
            <th><?php echo 'Location';?></th>
            <th><?php echo 'Capacity';?></th>
            <th class="actions"><?php echo __('        ');?></th>
        </tr>        
        <?php foreach ($results as $result): ?>
        <tr>
            <td><?php echo h($result ['hall id']);?>&nbsp;</td>
            <td><?php echo h($result['hall name']);?>&nbsp;</td>
            <td><?php echo h($result['location']);?>&nbsp;</td>
            <td><?php echo h($result['capacity']);?>&nbsp;</td>
            <td class="actions">
                <?php echo $this->Form->postLink(__('Select'), array('action' => 'selectHall', $result['hall id'], $result['hall name'], $result['location'],
                    $result['capacity'])); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php
            if(empty($results)) {
            echo 'There are no matching halls.';
            } ?>
    </table>
</div>
