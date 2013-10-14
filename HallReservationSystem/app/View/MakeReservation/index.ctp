<div class ="search_hall actions">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'MakeReservation', 'action' => 'index'))); ?>
    <fieldset>
        <h2>Search Hall</h2>
        <?php
        echo $this->Form->input('date', array(
            'type' => 'date',
            'empty' => false,
            'minYear' => date('Y'),
            'maxYear' => date('Y') + 3
        ));
        echo 'Please select time-slots:
                08:00:00 am - 08:00:00 pm/
                08:00:00 am - 12:00:00 pm/
                12:00:00 pm - 08:00:00 pm';
        ?>
        <br>
        <br>
        <?php
        echo $this->Form->input('from', array(
            'options' => $from,
//            'empty' => true
        ));
        ?>
        <style type="text/css">
            label{padding-left: 5px;}
            label{padding-bottom: 6px;}
        </style>
        <?php
        $options = array(
            'am' => '&nbsp;&nbsp;am',
            'pm' => '&nbsp;&nbsp;pm'
        );
        $attributes = array(
            'legend' => false
        );
        echo $this->Form->radio('type_begin', $options, $attributes);
        ?>
        <br>
        <?php
        echo $this->Form->input('to', array(
            'options' => $to,
//            'empty' => true
        ));
        ?>
        <style type="text/css">
            label{padding-left: 5px;}
            label{padding-bottom: 6px;}
        </style>
        <?php
        $options = array(
            'am' => '&nbsp;&nbsp;am',
            'pm' => '&nbsp;&nbsp;pm'
        );
        $attributes = array(
            'legend' => false
        );
        echo $this->Form->radio('type_end', $options, $attributes);
        ?>
        <br>
        <?php
        echo $this->Form->input('capacity', array(
            'rule' => 'numeric',
            'required' => true,
            'message' => 'Capacity is required'
        ));

        echo $this->Form->input('department', array('options' => $departments));
        ?>
    </fieldset>
    <!--<table>-->
<!--        <tr>
            <td class="actions">
                <?php // echo $this->Html->link(__('Search'), array('controller' => 'MakeReservation', 'action' => 'selectHall'))?>
                <?php // echo $this->Html->link(__('Back'), array('controller' => 'HallReservationSystem', 'action' => 'index'))?>
            </td>
        </tr>-->
    <!--</table>-->
    <?php echo $this->Form->end('Search') ?>
</div>