<?php
	if ($this->Auth->loggedIn()) {
		$this->Menu->push('accountMenu', __('My account', true), array('controller' => 'my', 'action' => 'account'), array('class' => 'my-account'));
		$this->Menu->push('accountMenu', __('Sign out', true), array('controller' => 'account', 'action' => 'logput'), array('class' => 'logout'));
	} else {
		$this->Menu->push('accountMenu', __('Sign in', true), array('controller' => 'account', 'action' => 'login'), array('class' => 'login'));
		$this->Menu->push('accountMenu', __('Register', true), array('controller' => 'account', 'action' => 'register'), array('class' => 'register'));
	}

	echo $this->Menu->display('accountMenu');

