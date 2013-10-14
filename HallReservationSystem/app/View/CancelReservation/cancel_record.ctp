<div class="cancel_record">

    <h2>Confirm Action</h2>
    <br>
    <br>
    <h3>Are you sure, you want to cancel the reservation?</h3>
<!--    <h3>Hall Information</h3>
    <dl>
        <dt><?php echo __('Hall ID'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('hallID')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('description')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Date'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('date')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Time'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('from')." ".$this->Session->read('begin')." - ".$this->Session->read('to')." ".$this->Session->read('end')); ?>
            &nbsp;
        </dd>
    </dl>
    <br>
    <br>
    <h3>Personal Details</h3>
    <dl>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('Auth.User.name')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email Address'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('Auth.User.email')); ?>
            &nbsp;
        </dd>
    </dl>-->
    <table>
            <tr>
                <td class="actions">
                    <?php echo $this->Form->postLink(__('Yes'), array('action' => 'cancelRecord'));?>
                    <?php echo $this->Html->link(__('Back'), array('action' => 'index'));?>
                    <?php echo $this->Html->link(__('Home'), array('controller' => 'HallReservationSystem', 'action' => 'index'));?>
                </td>
            </tr>
        </table>
</div>