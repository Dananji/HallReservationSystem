<?php
App::uses('AppController', 'Controller');
/**
 * ReservedHalls Controller
 *
 * @property ReservedHall $ReservedHall
 */
class ReservedHallsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReservedHall->recursive = 0;
		$this->set('reservedHalls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReservedHall->exists($id)) {
			throw new NotFoundException(__('Invalid reserved hall'));
		}
		$options = array('conditions' => array('ReservedHall.' . $this->ReservedHall->primaryKey => $id));
		$this->set('reservedHall', $this->ReservedHall->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReservedHall->create();
			if ($this->ReservedHall->save($this->request->data)) {
				$this->Session->setFlash(__('The reserved hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserved hall could not be saved. Please, try again.'));
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
		if (!$this->ReservedHall->exists($id)) {
			throw new NotFoundException(__('Invalid reserved hall'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReservedHall->save($this->request->data)) {
				$this->Session->setFlash(__('The reserved hall has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserved hall could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReservedHall.' . $this->ReservedHall->primaryKey => $id));
			$this->request->data = $this->ReservedHall->find('first', $options);
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
		$this->ReservedHall->id = $id;
		if (!$this->ReservedHall->exists()) {
			throw new NotFoundException(__('Invalid reserved hall'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReservedHall->delete()) {
			$this->Session->setFlash(__('Reserved hall deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reserved hall was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
