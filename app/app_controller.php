<?php

class AppController extends Controller {

	public $helpers = array(
		'Ninja.Auth',
		'Html',
		'Form',
		'Javascript',
		'Candy',
		'Ninja.Menu',
	);

	public $components = array(
		'Session',
		'Cookie',
		'MenuManager',
		'Ninja.PageTitle',
		'Ninja.DisableActions',
	);

	public $view = 'AppTheme';

	public $Setting;

	public function beforeFilter() {
		$this->_loadSettings();
	}

	protected function _loadSettings() {
		$this->Setting = ClassRegistry::init('Setting');
		$this->theme = strtolower($this->Setting->ui_theme);
		$this->set('Settings', $this->Setting);
	}

}
