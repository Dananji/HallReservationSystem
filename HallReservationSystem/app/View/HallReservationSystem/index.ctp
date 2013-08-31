<div class ="search_hall actions">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'HallReservationSystem', 'action' => 'index')));?>
    <fieldset>
        <h2>Search Hall</h2>
        <?php
        echo $this->Form->input('Reservation Date', array('type' => 'date'));
        echo $this->Form->input('Time', array('type' => 'time'));
        echo $this->Form->input('Capacity', array(
            'rule' => 'numeric',
            'required' => true,
            'message' => 'Capacity is required'
        ));
        echo $this->Form->input('Department', array('options' => $departments))
        ?>
    </fieldset>
    <?php echo $this->Form->end('Search')?>
</div>