<?php
App::uses('AppController', 'Controller');
/**
 * FormTypes Controller
 *
 * @property FormType $FormType
 */
class FormTypesController extends AppController {

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
		$this->FormType->recursive = 0;
		$this->set('formTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FormType->id = $id;
		if (!$this->FormType->exists()) {
			throw new NotFoundException(__('Invalid form type'));
		}
		$this->set('formType', $this->FormType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormType->create();
			if ($this->FormType->save($this->request->data)) {
				$this->Session->setFlash(__('The form type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form type could not be saved. Please, try again.'));
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
		$this->FormType->id = $id;
		if (!$this->FormType->exists()) {
			throw new NotFoundException(__('Invalid form type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormType->save($this->request->data)) {
				$this->Session->setFlash(__('The form type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormType->read(null, $id);
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
		$this->FormType->id = $id;
		if (!$this->FormType->exists()) {
			throw new NotFoundException(__('Invalid form type'));
		}
		if ($this->FormType->delete()) {
			$this->Session->setFlash(__('Form type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Form type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
