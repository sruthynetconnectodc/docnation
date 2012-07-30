<?php
App::uses('AppController', 'Controller');
/**
 * Boxes Controller
 *
 * @property Box $Box
 */
class BoxesController extends AppController {

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
		$this->Box->recursive = 0;
		$this->set('boxes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Box->id = $id;
		if (!$this->Box->exists()) {
			throw new NotFoundException(__('Invalid box'));
		}
		$this->set('box', $this->Box->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Box->create();
			if ($this->Box->save($this->request->data)) {
				$this->Session->setFlash(__('The box has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The box could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Box->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Box->id = $id;
		if (!$this->Box->exists()) {
			throw new NotFoundException(__('Invalid box'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Box->save($this->request->data)) {
				$this->Session->setFlash(__('The box has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The box could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Box->read(null, $id);
		}
		$clients = $this->Box->Client->find('list');
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
		$this->Box->id = $id;
		if (!$this->Box->exists()) {
			throw new NotFoundException(__('Invalid box'));
		}
		if ($this->Box->delete()) {
			$this->Session->setFlash(__('Box deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Box was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
