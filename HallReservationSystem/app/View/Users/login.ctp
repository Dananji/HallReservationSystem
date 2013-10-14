<div class="home">
    <div style="font-size: 30px;">Online Hall Reservation System</div>
</div>
<div class="form">
    <h2>Login Form</h2>
    <?php
    echo $this->Form->create();
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
    ?>
    
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('View as a Guest'), array('controller' => 'Reservations', 'action' => 'index'));?></li>
        </ul>
    </div>
</div>