<div class="reservation_details">
    <?php echo $this->Form->create($model = false,array('url'=> array('controller' => 'MakeReservation', 'action' => 'reservationDetails')));?>
    
    <h2>Reservation Details</h2>
    <?php ?>
    <fieldset>
        <?php
        echo 'Personal Details:';
        echo $this->Form->input('first name', array(
            'rule' => 'nonEmpty',
            'required' => true,
            'message' => 'First Name Required'
        ));
        echo $this->Form->input('last name', array(
            'rule' => 'nonEmpty',
            'required' => false,
            'message' => '',
        ));
        echo $this->Form->input('email', array(
            'rule' => 'nonEmpty',
            'required' => true,
            'message' => 'Email is Required'
        ));
        ?>
        <?php
        echo 'Reservation Details:';
        echo $this->Form->input('reservation_description', array(
            'rule' => 'nonEmpty',
            'required' => true,
            'message' => 'Description Required'
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Next'));?>
</div>