<?php
App::uses('AppController', 'Controller');
/**
 * ClientPreferences Controller
 *
 * @property ClientPreference $ClientPreference
 */
class ClientPreferencesController extends AppController {

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
		$this->ClientPreference->recursive = 0;
		$this->set('clientPreferences', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ClientPreference->id = $id;
		if (!$this->ClientPreference->exists()) {
			throw new NotFoundException(__('Invalid client preference'));
		}
		$this->set('clientPreference', $this->ClientPreference->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientPreference->create();
			if ($this->ClientPreference->save($this->request->data)) {
				$this->Session->setFlash(__('The client preference has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client preference could not be saved. Please, try again.'));
			}
		}
		$clients = $this->ClientPreference->Client->find('list');
		$billingPlans = $this->ClientPreference->BillingPlan->find('list');
		$this->set(compact('clients', 'billingPlans'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ClientPreference->id = $id;
		if (!$this->ClientPreference->exists()) {
			throw new NotFoundException(__('Invalid client preference'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ClientPreference->save($this->request->data)) {
				$this->Session->setFlash(__('The client preference has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client preference could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ClientPreference->read(null, $id);
		}
		$clients = $this->ClientPreference->Client->find('list');
		$billingPlans = $this->ClientPreference->BillingPlan->find('list');
		$this->set(compact('clients', 'billingPlans'));
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
		$this->ClientPreference->id = $id;
		if (!$this->ClientPreference->exists()) {
			throw new NotFoundException(__('Invalid client preference'));
		}
		if ($this->ClientPreference->delete()) {
			$this->Session->setFlash(__('Client preference deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Client preference was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
