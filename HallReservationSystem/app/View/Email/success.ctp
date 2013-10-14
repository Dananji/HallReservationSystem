<div>
    <div class="success">
            <div style="font-size: 30px;">Your Reservation was Successful</div>
    </div>
    <div>
        <div style="font-size: 20px">
            You will receive an email reminder, before the reservation date!
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div>
        <div style="font-size: 20px">
            Do you want to make another reservation?
        </div>
    </div>
    <table>
        <tr>
            <td class="actions">
                <?php echo $this->Html->link(__('Yes'), array('controller' => 'MakeReservation', 'action' => 'index'))?>
                <?php echo $this->Html->link(__('No'), array('controller' => 'HallReservationSystem', 'action' => 'index'))?>
            </td>
        </tr>
    </table>
</div>
