<?php
/* Provinces Test cases generated on: 2010-10-12 15:10:17 : 1286889737*/
App::import('Controller', 'Provinces');

class TestProvincesController extends ProvincesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvincesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.province', 'app.region');

	function startTest() {
		$this->Provinces =& new TestProvincesController();
		$this->Provinces->constructClasses();
	}

	function endTest() {
		unset($this->Provinces);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>