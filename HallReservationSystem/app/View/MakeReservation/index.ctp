<div class ="search_hall actions">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'HallReservationSystem', 'action' => 'index')));?>
    <fieldset>
        <h2>Search Hall</h2>
        <?php
        echo $this->Form->input('date', array(
            'type' => 'date',
            'empty' => true,
            'minYear' => date('Y'),
            'maxYear' => date('Y') + 3
            ));
        echo $this->Form->input('from', array(
            'options' => $from,
//            'empty' => true
            ));
        $options = array(
            'am' => 'am',
            'pm' => 'pm'
        );
        $attributes = array(
            'legend' => false
        );
        echo $this->Form->radio('type_begin', $options, $attributes);
        echo $this->Form->input('to', array(
            'options' => $to,
//            'empty' => true
            ));
        $options = array(
            'am' => 'am',
            'pm' => 'pm'
        );
        $attributes = array(
            'legend' => false
        );
        echo $this->Form->radio('type_end', $options, $attributes);
        echo $this->Form->input('capacity', array(
            'rule' => 'numeric',
            'required' => true,
            'message' => 'Capacity is required'
        ));
        echo $this->Form->input('department', array('options' => $departments));
        ?>
    </fieldset>
    <?php echo $this->Form->end('Search')?>
</div>