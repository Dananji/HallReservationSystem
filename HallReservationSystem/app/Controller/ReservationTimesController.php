<?php
App::uses('AppController', 'Controller');
/**
 * ReservationTimes Controller
 *
 * @property ReservationTime $ReservationTime
 */
class ReservationTimesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReservationTime->recursive = 0;
		$this->set('reservationTimes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReservationTime->exists($id)) {
			throw new NotFoundException(__('Invalid reservation time'));
		}
		$options = array('conditions' => array('ReservationTime.' . $this->ReservationTime->primaryKey => $id));
		$this->set('reservationTime', $this->ReservationTime->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReservationTime->create();
			if ($this->ReservationTime->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation time could not be saved. Please, try again.'));
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
		if (!$this->ReservationTime->exists($id)) {
			throw new NotFoundException(__('Invalid reservation time'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReservationTime->save($this->request->data)) {
				$this->Session->setFlash(__('The reservation time has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reservation time could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReservationTime.' . $this->ReservationTime->primaryKey => $id));
			$this->request->data = $this->ReservationTime->find('first', $options);
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
		$this->ReservationTime->id = $id;
		if (!$this->ReservationTime->exists()) {
			throw new NotFoundException(__('Invalid reservation time'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReservationTime->delete()) {
			$this->Session->setFlash(__('Reservation time deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reservation time was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
