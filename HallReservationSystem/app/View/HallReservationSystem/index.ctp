<div class ="index actions">
     <?php echo $this->Form->create($model = false,array('url'=> array('controller' => 'HallReservationSystem', 'action' => 'index')));?>
    <div style="font-size: 30px;">Choose the Preferred Action</div>
    <br>
    <br>
    <div>
        <style type="text/css">
            label{padding-left:5px;}
        </style>
        <?php
        $options = array(
            'reserve' => '&nbsp;&nbsp;Make a Reservation', 
            'cancel' => '&nbsp;&nbsp;Cancel a Reservation'
        );
        $attributes = array(
            'legend' => false
        );
        echo $this->Form->radio('task', $options, $attributes);
        ?>
    </div>
    <?php echo $this->Form->end('Submit')?>
</div>
