<?php

class AppController extends Controller {
	var $components = array('Auth');

	function beforeFilter() {

        $this->Auth->fields = array(
            'username' => 'email', 
            'password' => 'password'
            );

        $this->Auth->loginRedirect = array('controller' => 'user_sessions', 'action' => 'index');
	$this->Auth->allow('register');


    }

}
?>
