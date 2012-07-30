<?php
App::uses('AppController', 'Controller');
/**
 * BillingPlans Controller
 *
 * @property BillingPlan $BillingPlan
 */
class BillingPlansController extends AppController {

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
		$this->BillingPlan->recursive = 0;
		$this->set('billingPlans', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BillingPlan->id = $id;
		if (!$this->BillingPlan->exists()) {
			throw new NotFoundException(__('Invalid billing plan'));
		}
		$this->set('billingPlan', $this->BillingPlan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BillingPlan->create();
			if ($this->BillingPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The billing plan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billing plan could not be saved. Please, try again.'));
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
		$this->BillingPlan->id = $id;
		if (!$this->BillingPlan->exists()) {
			throw new NotFoundException(__('Invalid billing plan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BillingPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The billing plan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The billing plan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BillingPlan->read(null, $id);
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
		$this->BillingPlan->id = $id;
		if (!$this->BillingPlan->exists()) {
			throw new NotFoundException(__('Invalid billing plan'));
		}
		if ($this->BillingPlan->delete()) {
			$this->Session->setFlash(__('Billing plan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Billing plan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
