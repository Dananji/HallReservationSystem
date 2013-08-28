<div class ="users login">
    <h2><?php echo__('User Login');?></h2>
    <?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login'));
    echo $this->Form->inputs(array(
        'legend' => __('Login', true),
        'username',
        'password'
    ));
    echo $this->Form->end('Login');
    ?>    
</div>