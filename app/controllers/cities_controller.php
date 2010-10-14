<?php
class CitiesController extends AppController {

	var $name = 'Cities';

	function index() {
		$this->City->recursive = 0;
		$this->set('cities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid city', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('city', $this->City->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->City->create();
			if ($this->City->save($this->data)) {
				$this->Session->setFlash(__('The city has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.', true));
			}
		}
		$provinces = $this->City->Province->find('list');
		$this->set(compact('provinces'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid city', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->City->save($this->data)) {
				$this->Session->setFlash(__('The city has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The city could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->City->read(null, $id);
		}
		$provinces = $this->City->Province->find('list');
		$this->set(compact('provinces'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for city', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->City->delete($id)) {
			$this->Session->setFlash(__('City deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('City was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>