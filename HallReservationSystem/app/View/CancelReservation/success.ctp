<div>
    <div class="success">
            <div style="font-size: 30px;">Reservation Deleted Successfully</div>
    </div>
    <div>
    </div>
    <br/>
    <br/>
    <br/>
    <h3>Would you like to cancel another reservation?</h3>
    <table>
        <tr>
            <td class="actions">
                <?php echo $this->Html->link(__('Yes'), array('action' => 'index'))?>
                <?php echo $this->Html->link(__('No'), array('controller' => 'HallReservationSystem', 'action' => 'index')); ?>
            </td>
        </tr>
    </table>
</div>
