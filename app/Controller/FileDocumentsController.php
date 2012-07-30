<?php
App::uses('AppController', 'Controller');
/**
 * FileDocuments Controller
 *
 * @property FileDocument $FileDocument
 */
class FileDocumentsController extends AppController {

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
		$this->FileDocument->recursive = 0;
		$this->set('fileDocuments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FileDocument->id = $id;
		if (!$this->FileDocument->exists()) {
			throw new NotFoundException(__('Invalid file document'));
		}
		$this->set('fileDocument', $this->FileDocument->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FileDocument->create();
			if ($this->FileDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The file document has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file document could not be saved. Please, try again.'));
			}
		}
		$clients = $this->FileDocument->Client->find('list');
		$boxes = $this->FileDocument->Box->find('list');
		$branches = $this->FileDocument->Branch->find('list');
		$accGroups = $this->FileDocument->AccGroup->find('list');
		$fileLocations = $this->FileDocument->FileLocation->find('list');
		$filePaths = $this->FileDocument->FilePath->find('list');
		$formTypes = $this->FileDocument->FormType->find('list');
		$this->set(compact('clients', 'boxes', 'branches', 'accGroups', 'fileLocations', 'filePaths', 'formTypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FileDocument->id = $id;
		if (!$this->FileDocument->exists()) {
			throw new NotFoundException(__('Invalid file document'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FileDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The file document has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file document could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FileDocument->read(null, $id);
		}
		$clients = $this->FileDocument->Client->find('list');
		$boxes = $this->FileDocument->Box->find('list');
		$branches = $this->FileDocument->Branch->find('list');
		$accGroups = $this->FileDocument->AccGroup->find('list');
		$fileLocations = $this->FileDocument->FileLocation->find('list');
		$filePaths = $this->FileDocument->FilePath->find('list');
		$formTypes = $this->FileDocument->FormType->find('list');
		$this->set(compact('clients', 'boxes', 'branches', 'accGroups', 'fileLocations', 'filePaths', 'formTypes'));
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
		$this->FileDocument->id = $id;
		if (!$this->FileDocument->exists()) {
			throw new NotFoundException(__('Invalid file document'));
		}
		if ($this->FileDocument->delete()) {
			$this->Session->setFlash(__('File document deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('File document was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
