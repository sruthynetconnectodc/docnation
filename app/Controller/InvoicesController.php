<?php
App::uses('AppController', 'Controller');
/**
 * Invoices Controller
 *
 * @property Invoice $Invoice
 */
class InvoicesController extends AppController {

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
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Invoice->id = $id;
		if (!$this->Invoice->exists()) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		$this->set('invoice', $this->Invoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		}
		$clients = $this->Invoice->Client->find('list');
		$fileDocuments = $this->Invoice->FileDocument->find('list');
		$boxes = $this->Invoice->Box->find('list');
		$billingPlans = $this->Invoice->BillingPlan->find('list');
		$this->set(compact('clients', 'fileDocuments', 'boxes', 'billingPlans'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Invoice->id = $id;
		if (!$this->Invoice->exists()) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Invoice->save($this->request->data)) {
				$this->Session->setFlash(__('The invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Invoice->read(null, $id);
		}
		$clients = $this->Invoice->Client->find('list');
		$fileDocuments = $this->Invoice->FileDocument->find('list');
		$boxes = $this->Invoice->Box->find('list');
		$billingPlans = $this->Invoice->BillingPlan->find('list');
		$this->set(compact('clients', 'fileDocuments', 'boxes', 'billingPlans'));
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
		$this->Invoice->id = $id;
		if (!$this->Invoice->exists()) {
			throw new NotFoundException(__('Invalid invoice'));
		}
		if ($this->Invoice->delete()) {
			$this->Session->setFlash(__('Invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
