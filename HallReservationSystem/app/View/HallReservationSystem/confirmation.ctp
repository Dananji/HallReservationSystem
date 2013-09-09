<div class="confirmation">
    <?php echo $this->Form->create($model = false, array('url' => array('controller' => 'HallReservationSystem', 'action' => 'confirmation')));?>
        <h2>Reservation Confirmation</h2>
        <h3>Hall Information</h3>
        <dl>
            <dt><?php echo __('Hall Name');?></dt>
            <dd>
                <?php echo h($this->Session->read('hallName'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Capacity');?></dt>
            <dd>
                <?php echo h($this->Session->read('capacity'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Authority');?></dt>
            <dd>
                <?php echo h($this->Session->read('department'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Location');?></dt>
            <dd>
                <?php echo h($this->Session->read('location'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Date');?></dt>
            <dd>
                <?php echo h($this->Session->read('date'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Time');?></dt>
            <dd>
                <?php echo h($this->Session->read('time'));?>
                &nbsp;
            </dd>
        </dl>
        <br>
        <h3>Personal Information</h3>
        <dl>
            <dt><?php echo __('First Name');?></dt>
            <dd>
                <?php echo h($this->Session->read('first_name'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Last Name');?></dt>
            <dd>
                <?php echo h($this->Session->read('last_name'));?>
                &nbsp;
            </dd>
            <dt><?php echo __('Email Address');?></dt>
            <dd>
                <?php echo h($this->Session->read('email'));?>
                &nbsp;
            </dd>
        </dl>
        <table>
            <tr>
                <td class="actions">
                    <?php echo $this->Form->postLink(__('Make Reservation'), array('action' => 'confirmation'));?>
                    <?php echo $this->Html->link(__('Back'), array('action' => 'reservationDetails'));?>
                    <?php echo $this->Html->link(__('Cancel'), array('action' => 'index'));?>
                </td>
            </tr>
        </table>
</div>