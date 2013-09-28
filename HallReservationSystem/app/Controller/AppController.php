<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
//AppController::users();

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    //defining the components array for the Auth component 
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'HallReservationSystem', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authError' => "You don't have permission to access",
            'authorize' => array('Controller')
        )
    );
    
    public $helpers = array('Session');

    //checking whether the user is authorized 
    public function isAuthorized($user) {
        return true;
    }

    //allowing and denying permission for the unauthorized users to access index and view pages of all the controllers
    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
        $this->Session->started();
//        if(!empty($this->passedArgs['url']['session_key'])) {
//            setcookie(Configure::read('Session.cookie'), $session_cookie, time()+360000, '/', $domain);
//        }
    }

    public function afterFilter() {
        parent::afterFilter();
        if(!empty($this->passedArgs['url']['session_key'])) {
            setcookie(Configure::read('Session.cookie'), $this->passedArgs['url']['session_key'], time()+360000, '/');
        }
    }
//    public function beforeRender() {
//        parent::beforeRender();
//        if ($this->Session->check('Auth.User')) {
//            $this->User->recursive = -1;
//            $currentUser = $this->User->read(null, $this->Session->read('Auth.User.id'));
//            $this->set(compact('currentUser'));
//        }
//    }

}

