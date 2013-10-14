<div class="send_mail">
    <h3>Email Sent!</h3>
    <dl>
        <dt><?php echo __('Sender');?></dt>
        <dd>
            <?php echo h($this->Session->read('sender'));?>
            &nbsp;
        </dd>
        <dt><?php echo __('Message');?></dt>
        <dd>
            <?php echo h($this->Session->read('message'));?>
            &nbsp;
        </dd>
        <dt><?php echo __('Receiver');?></dt>
        <dd>
            <?php echo h($this->Session->read('receiver'));?>
            &nbsp;
        </dd>
    </dl>
    <br>
    <br>
    <td class="actions">
        <?php if ($this->Session->read('sent') == true): ?>
            <?php echo $this->Html->link(__('Back'), array('controller' => 'Reservations', 'action' => 'index')); ?>
        <?php endif; ?>
        <?php // echo $this->Html->link(__('OK'), array('action' => 'success'));?>
    </td>


</div>