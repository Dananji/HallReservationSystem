<div class ="search_hall actions">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'HallReservationSystem', 'action' => 'index')));?>
    <fieldset>
        <h2>Search Hall</h2>
        <?php
        echo $this->Form->input('date', array('type' => 'date'));
        echo $this->Form->input('from', array('options' => $from));
        echo $this->Form->input('to', array('options' => $to));
        echo $this->Form->input('capacity', array(
            'rule' => 'numeric',
            'required' => true,
            'message' => 'Capacity is required'
        ));
        echo $this->Form->input('department', array('options' => $departments))
        ?>
    </fieldset>
    <?php echo $this->Form->end('Search')?>
</div>