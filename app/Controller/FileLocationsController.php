<?php
App::uses('AppController', 'Controller');
/**
 * FileLocations Controller
 *
 * @property FileLocation $FileLocation
 */
class FileLocationsController extends AppController {

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
		$this->FileLocation->recursive = 0;
		$this->set('fileLocations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FileLocation->id = $id;
		if (!$this->FileLocation->exists()) {
			throw new NotFoundException(__('Invalid file location'));
		}
		$this->set('fileLocation', $this->FileLocation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileLocation->create();
			if ($this->FileLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The file location has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file location could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FileLocation->id = $id;
		if (!$this->FileLocation->exists()) {
			throw new NotFoundException(__('Invalid file location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FileLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The file location has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file location could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FileLocation->read(null, $id);
		}
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
		$this->FileLocation->id = $id;
		if (!$this->FileLocation->exists()) {
			throw new NotFoundException(__('Invalid file location'));
		}
		if ($this->FileLocation->delete()) {
			$this->Session->setFlash(__('File location deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('File location was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
