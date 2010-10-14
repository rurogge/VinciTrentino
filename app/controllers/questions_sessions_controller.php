<?php
class QuestionsSessionsController extends AppController {

	var $name = 'QuestionsSessions';

	function index() {
		$this->QuestionsSession->recursive = 0;
		$this->set('questionsSessions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions session', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsSession', $this->QuestionsSession->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->QuestionsSession->create();
			if ($this->QuestionsSession->save($this->data)) {
				$this->Session->setFlash(__('The questions session has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions session could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsSession->Question->find('list');
		$userSessions = $this->QuestionsSession->UserSession->find('list');
		$this->set(compact('questions', 'userSessions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions session', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsSession->save($this->data)) {
				$this->Session->setFlash(__('The questions session has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions session could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsSession->read(null, $id);
		}
		$questions = $this->QuestionsSession->Question->find('list');
		$userSessions = $this->QuestionsSession->UserSession->find('list');
		$this->set(compact('questions', 'userSessions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions session', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsSession->delete($id)) {
			$this->Session->setFlash(__('Questions session deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions session was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>