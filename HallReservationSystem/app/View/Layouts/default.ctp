<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$cakeDescription = __d('Hall Reservation', 'Online Hall Reservation System');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <div id="header">
        <?php if ($this->Session->read('Auth.User.id') != null): ?>
            <div style="font-size: 30px">
                <span><?php echo $this->Html->link(__('Online Hall Reservation System'), array('controller' => 'HallReservationSystem', 'action' => 'index')); ?></span>
            </div>
        <?php endif; ?>
        <div style="text-align: right;">
            <?php echo 'Online Hall Reservation System' ?>
        </div>
    </div>
    <body>
        <div id="container">
            <div id="content">

                <div style="text-align: right;">
                    <?php if ($logged_in): ?>
                        Welcome <?php echo $this->Html->link($current_user['username'], array('controller' => 'users', 'action' => 'view' . '/' . $current_user['id'])) ?>, <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
                    <?php else: ?>
                        <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
                    <?php endif; ?>
                </div>

                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
                );
                ?>
            </div>
        </div>
    </body>
</html>
