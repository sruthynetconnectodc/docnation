<?php
App::uses('AppController', 'Controller');
/**
 * CallSheets Controller
 *
 * @property CallSheet $CallSheet
 */
class CallSheetsController extends AppController {

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
		$this->CallSheet->recursive = 0;
		$this->set('callSheets', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CallSheet->id = $id;
		if (!$this->CallSheet->exists()) {
			throw new NotFoundException(__('Invalid call sheet'));
		}
		$this->set('callSheet', $this->CallSheet->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CallSheet->create();
			if ($this->CallSheet->save($this->request->data)) {
				$this->Session->setFlash(__('The call sheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call sheet could not be saved. Please, try again.'));
			}
		}
		$clients = $this->CallSheet->Client->find('list');
		$this->set(compact('clients'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CallSheet->id = $id;
		if (!$this->CallSheet->exists()) {
			throw new NotFoundException(__('Invalid call sheet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CallSheet->save($this->request->data)) {
				$this->Session->setFlash(__('The call sheet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The call sheet could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CallSheet->read(null, $id);
		}
		$clients = $this->CallSheet->Client->find('list');
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
		$this->CallSheet->id = $id;
		if (!$this->CallSheet->exists()) {
			throw new NotFoundException(__('Invalid call sheet'));
		}
		if ($this->CallSheet->delete()) {
			$this->Session->setFlash(__('Call sheet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Call sheet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
