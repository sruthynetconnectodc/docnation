<?php
App::uses('AppController', 'Controller');
/**
 * AlbumItems Controller
 *
 * @property AlbumItem $AlbumItem
 */
class AlbumItemsController extends AppController {

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
		$this->AlbumItem->recursive = 0;
		$this->set('albumItems', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->AlbumItem->id = $id;
		if (!$this->AlbumItem->exists()) {
			throw new NotFoundException(__('Invalid album item'));
		}
		$this->set('albumItem', $this->AlbumItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlbumItem->create();
			if ($this->AlbumItem->save($this->request->data)) {
				$this->Session->setFlash(__('The album item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album item could not be saved. Please, try again.'));
			}
		}
		$albums = $this->AlbumItem->Album->find('list');
		$this->set(compact('albums'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->AlbumItem->id = $id;
		if (!$this->AlbumItem->exists()) {
			throw new NotFoundException(__('Invalid album item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AlbumItem->save($this->request->data)) {
				$this->Session->setFlash(__('The album item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The album item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->AlbumItem->read(null, $id);
		}
		$albums = $this->AlbumItem->Album->find('list');
		$this->set(compact('albums'));
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
		$this->AlbumItem->id = $id;
		if (!$this->AlbumItem->exists()) {
			throw new NotFoundException(__('Invalid album item'));
		}
		if ($this->AlbumItem->delete()) {
			$this->Session->setFlash(__('Album item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Album item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
