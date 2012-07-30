<?php
App::uses('AppController', 'Controller');
/**
 * CheckInfos Controller
 *
 * @property CheckInfo $CheckInfo
 */
class CheckInfosController extends AppController {

        public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
		$this->Auth->allow('add', 'add');
		$this->Auth->allow('edit', 'edit');
		$this->Auth->allow('delete', 'delete');
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CheckInfo->recursive = 0;
		$this->set('checkInfos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CheckInfo->id = $id;
		if (!$this->CheckInfo->exists()) {
			throw new NotFoundException(__('Invalid check info'));
		}
		$this->set('checkInfo', $this->CheckInfo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CheckInfo->create();
			if ($this->CheckInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The check info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check info could not be saved. Please, try again.'));
			}
		}
		$clients = $this->CheckInfo->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CheckInfo->id = $id;
		if (!$this->CheckInfo->exists()) {
			throw new NotFoundException(__('Invalid check info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CheckInfo->save($this->request->data)) {
				$this->Session->setFlash(__('The check info has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check info could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CheckInfo->read(null, $id);
		}
		$clients = $this->CheckInfo->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->CheckInfo->id = $id;
		if (!$this->CheckInfo->exists()) {
			throw new NotFoundException(__('Invalid check info'));
		}
		if ($this->CheckInfo->delete()) {
			$this->Session->setFlash(__('Check info deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Check info was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
