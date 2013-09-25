<div class="cancel_record">

    <h2>Confirm</h2>
    <h3>Hall Information</h3>
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
    <h3>Personal Details</h3>
    <dl>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('first_name')." ".$this->Session->read('last_name')); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email Address'); ?></dt>
        <dd>
            <?php echo h($this->Session->read('email')); ?>
            &nbsp;
        </dd>
    </dl>
    <table>
            <tr>
                <td class="actions">
                    <?php echo $this->Form->postLink(__('Cancel Reservation'), array('action' => 'cancelRecord'));?>
                    <?php echo $this->Html->link(__('Back'), array('action' => 'index'));?>
                </td>
            </tr>
        </table>
</div>