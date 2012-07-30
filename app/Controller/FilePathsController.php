<?php
App::uses('AppController', 'Controller');
/**
 * FilePaths Controller
 *
 * @property FilePath $FilePath
 */
class FilePathsController extends AppController {

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
		$this->FilePath->recursive = 0;
		$this->set('filePaths', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FilePath->id = $id;
		if (!$this->FilePath->exists()) {
			throw new NotFoundException(__('Invalid file path'));
		}
		$this->set('filePath', $this->FilePath->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FilePath->create();
			if ($this->FilePath->save($this->request->data)) {
				$this->Session->setFlash(__('The file path has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file path could not be saved. Please, try again.'));
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
		$this->FilePath->id = $id;
		if (!$this->FilePath->exists()) {
			throw new NotFoundException(__('Invalid file path'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FilePath->save($this->request->data)) {
				$this->Session->setFlash(__('The file path has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file path could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FilePath->read(null, $id);
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
		$this->FilePath->id = $id;
		if (!$this->FilePath->exists()) {
			throw new NotFoundException(__('Invalid file path'));
		}
		if ($this->FilePath->delete()) {
			$this->Session->setFlash(__('File path deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('File path was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
