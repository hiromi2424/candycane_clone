<?php
	$this->Menu->push('topMenu', __('Home', true), '/', array('class' => 'home'));

	if ($this->Auth->loggedIn()) {
		$this->Menu->push('topMenu', __('My page',true), array('controller' => 'my', 'action' => 'page'), array('class' => 'my-page'));
	}

	$this->Menu->push('topMenu', __('Projects',true), array('controller' => 'projects', 'action' => 'index'), array('class' => 'projects'));

	if ($this->Auth->user('admin')) {
		$this->Menu->push('topMenu', __('Administration',true), array('controller' => 'admin', 'action' => 'index'), array('class' => 'administration'));
	}

	$this->Menu->push('topMenu', __('Help', true), 'http://candy.cakephp.jp/help', array('class' => 'help'));

	echo $this->Menu->display('topMenu');
