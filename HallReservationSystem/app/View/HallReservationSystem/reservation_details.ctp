<div class="reservation_details">
    <?php echo $this->Form->create($model = false,array('url'=> array('controller' => 'HallReservationSystem', 'action' => 'reservationDetails')));?>
    
    <h2>Reservation Details</h2>
    <?php ?>
    <fieldset>
        <?php
        echo 'Provide Further Details';
        echo $this->Form->input('reservation_description', array(
            'rule' => 'nonEmpty',
            'required' => true,
            'message' => 'Description Required'
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Next'));?>
</div>