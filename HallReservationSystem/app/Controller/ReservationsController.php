<?php

App::uses('AppController', 'Controller');
App::import('Controller', 'ReservedHalls');
include_once '../Lib/Database.php';

/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 */
class ReservationsController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('view');
        $this->db = new Database();
    }

    public function isAuthorized($user) {
        if ($user['role'] == 'admin') {
            return true;
        }
        return true;
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Reservation->recursive = 0;
        $this->set('reservations', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Reservation->exists($id)) {
            throw new NotFoundException(__('Invalid reservation'));
        }
        $options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
        $this->set('reservation', $this->Reservation->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Reservation->create();
            if ($this->Reservation->save($this->request->data)) {
                $this->Session->setFlash(__('The reservation has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Reservation->exists($id)) {
            throw new NotFoundException(__('Invalid reservation'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Reservation->save($this->request->data)) {
                $this->Session->setFlash(__('The reservation has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The reservation could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
            $this->request->data = $this->Reservation->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $reservedHall = new ReservedHallsController;
//        $this->Reservation->id = $id;
//        if (!$this->Reservation->exists()) {
//            throw new NotFoundException(__('Invalid reservation'));
//        }
//        $this->request->onlyAllow('post', 'delete');
//        if ($this->Reservation->delete()) {
//            $this->Session->setFlash(__('Reservation deleted'));
//            $this->redirect(array('action' => 'index'));
//            $reservedHall->delete();
//        }
//        $this->Session->setFlash(__('Reservation was not deleted'));
//        $this->redirect(array('action' => 'index'));
        if($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if(!$id) {
            $this->Session->setFlash('Invalid Reservation');
            $this->redirect(array('action' => 'index'));
        }
        if($this->Reservation->delete($id)) {
            $this->Session->setFlash('Reservation deleted');
            $this->redirect(array('action' => 'index'));
            $reservedHall->delete();
        }
        $this->Session->setFlash('Reservation was not deleted');
        $this->redirect(array('action' => 'index'));
    }

    public function deleteRecord($id = null) {
        // set default class & message for setFlash
        /* $class = 'flash_bad';
          $msg = 'Invalid List Id';

          // check id is valid
          if ($id != null && is_numeric($id)) {
          // get the Item
          $item = $this->Reservation->read(null, $id);

          // check Item is valid
          if (!empty($item)) {
          // try deleting the item
          if ($this->Reservation->delete($id)) {
          $class = 'flash_good';
          $msg = 'Your Item was successfully deleted';
          } else {
          $msg = 'There was a problem deleting your Item, please try again';
          }
          }
          }

          // output JSON on AJAX request
          if ($this->RequestHandler->isAjax()) {
          $this->autoRender = $this->layout = false;
          echo json_encode(array('success' => ($class == 'flash_bad') ? FALSE : TRUE, 'msg' => "<p id='flashMessage' class='{$class}'>{$msg}</p>"));
          exit;
          }

          // set flash message & redirect
          $this->Session->setFlash($msg, 'default', array('class' => $class));
          $this->redirect(array('action' => 'index')); // set default class & message for setFlash
          $class = 'flash_bad';
          $msg = 'Invalid List Id';

          // check id is valid
          if ($id != null && is_numeric($id)) {
          // get the Item
          $item = $this->Item->read(null, $id);

          // check Item is valid
          if (!empty($item)) {
          // try deleting the item
          if ($this->Item->delete($id)) {
          $class = 'flash_good';
          $msg = 'Your Item was successfully deleted';
          } else {
          $msg = 'There was a problem deleting your Item, please try again';
          }
          }
          }

          // output JSON on AJAX request
          if ($this->RequestHandler->isAjax()) {
          $this->autoRender = $this->layout = false;
          echo json_encode(array('success' => ($class == 'flash_bad') ? FALSE : TRUE, 'msg' => "<p id='flashMessage' class='{$class}'>{$msg}</p>"));
          exit;
          }

          // set flash message & redirect
          $this->Session->setFlash($msg, 'default', array('class' => $class));
          $this->redirect(array('action' => 'index')); */
    }

}
