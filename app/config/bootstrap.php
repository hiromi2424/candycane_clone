<?php

App::import('Lib', 'Installer');

if (Installer::installed()) {
	Configure::write('DisableActions.install', '*');
}

App::import('Lib', 'CandyAutoLoader');
spl_autoload_register('CandyAutoLoader::load');

CandyAutoLoader::uses('Spyc', 'Vendor');
CandyAutoLoader::uses(App::objects('model'), 'Model');
