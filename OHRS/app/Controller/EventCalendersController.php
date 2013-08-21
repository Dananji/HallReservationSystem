<?php
App::uses('AppController', 'Controller');
/**
 * EventCalenders Controller
 *
 * @property EventCalender $EventCalender
 */
class EventCalendersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventCalender->recursive = 0;
		$this->set('eventCalenders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventCalender->exists($id)) {
			throw new NotFoundException(__('Invalid event calender'));
		}
		$options = array('conditions' => array('EventCalender.' . $this->EventCalender->primaryKey => $id));
		$this->set('eventCalender', $this->EventCalender->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventCalender->create();
			if ($this->EventCalender->save($this->request->data)) {
				$this->Session->setFlash(__('The event calender has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event calender could not be saved. Please, try again.'));
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
		if (!$this->EventCalender->exists($id)) {
			throw new NotFoundException(__('Invalid event calender'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EventCalender->save($this->request->data)) {
				$this->Session->setFlash(__('The event calender has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event calender could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventCalender.' . $this->EventCalender->primaryKey => $id));
			$this->request->data = $this->EventCalender->find('first', $options);
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
		$this->EventCalender->id = $id;
		if (!$this->EventCalender->exists()) {
			throw new NotFoundException(__('Invalid event calender'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventCalender->delete()) {
			$this->Session->setFlash(__('Event calender deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Event calender was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
