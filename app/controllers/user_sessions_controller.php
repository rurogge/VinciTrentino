<?php
class UserSessionsController extends AppController {

	var $name = 'UserSessions';

	function index() {
		$this->UserSession->recursive = 0;
		$this->set('userSessions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user session', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userSession', $this->UserSession->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserSession->create();
			if ($this->UserSession->save($this->data)) {
				$this->Session->setFlash(__('The user session has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user session could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserSession->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user session', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserSession->save($this->data)) {
				$this->Session->setFlash(__('The user session has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user session could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserSession->read(null, $id);
		}
		$users = $this->UserSession->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user session', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserSession->delete($id)) {
			$this->Session->setFlash(__('User session deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User session was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>