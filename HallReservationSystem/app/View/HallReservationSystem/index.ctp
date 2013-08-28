<div class ="hallreservationsystem actions">
    <h2><?php echo__('Select Hall')?></h2>
    <fieldset>
        <h2>Search Hall</h2>
        <?php
        echo $this->Form->input('Date', array('type' => 'date'));
        echo $this->Form->input('Time', array('type' => 'time'));
        echo $this->Form->input('Capacity', array(
            'rule' => 'notEmpty',
            'required' => true,
            'message' => 'Capacity is required'
        ));
        //add departments
        ?>
    </fieldset>
    <?php echo $this->Form->end('Search')?>
</div>