<?php
App::uses('AppController', 'Controller');
/**
 * Albums Controller
 *
 * @property Album $Album
 */
class AlbumsController extends AppController {

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
		$this->Album->recursive = 0;
		$this->set('albums', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Album->id = $id;
		if (!$this->Album->exists()) {
			throw new NotFoundException(__('Invalid album'));
		}
		$this->set('album', $this->Album->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Album->create();
			if ($this->Album->save($this->request->data)) {
				$this->Session->setFlash(__('The album has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album could not be saved. Please, try again.'));
			}
		}
		$users = $this->Album->User->find('list');
		$albumItems = $this->Album->AlbumItem->find('list');
		$this->set(compact('users', 'albumItems'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Album->id = $id;
		if (!$this->Album->exists()) {
			throw new NotFoundException(__('Invalid album'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Album->save($this->request->data)) {
				$this->Session->setFlash(__('The album has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Album->read(null, $id);
		}
		$users = $this->Album->User->find('list');
		$albumItems = $this->Album->AlbumItem->find('list');
		$this->set(compact('users', 'albumItems'));
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
		$this->Album->id = $id;
		if (!$this->Album->exists()) {
			throw new NotFoundException(__('Invalid album'));
		}
		if ($this->Album->delete()) {
			$this->Session->setFlash(__('Album deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Album was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
