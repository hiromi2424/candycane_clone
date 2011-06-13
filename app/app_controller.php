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



}
