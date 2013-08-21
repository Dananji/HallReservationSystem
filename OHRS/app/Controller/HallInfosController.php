<?php
App::uses('AppController', 'Controller');
/**
 * HallInfos Controller
 *
 * @property HallInfo $HallInfo
 */
class HallInfosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HallInfo->recursive = 0;
		$this->set('hallInfos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HallInfo->exists($id)) {
			throw new NotFoundException(__('Invalid hall info'));
		}
		$options = array('conditions' => array('HallInfo.' . $this->HallInfo->primaryKey => $id));
		$this->set('hallInfo', $this->HallInfo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HallInfo->create();
			if ($this->HallInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The hall info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall info could not be saved. Please, try again.'));
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
		if (!$this->HallInfo->exists($id)) {
			throw new NotFoundException(__('Invalid hall info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HallInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The hall info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hall info could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HallInfo.' . $this->HallInfo->primaryKey => $id));
			$this->request->data = $this->HallInfo->find('first', $options);
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
		$this->HallInfo->id = $id;
		if (!$this->HallInfo->exists()) {
			throw new NotFoundException(__('Invalid hall info'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HallInfo->delete()) {
			$this->Session->setFlash(__('Hall info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Hall info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
