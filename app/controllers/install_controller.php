<?php
/*
 * InstallController
 * 
 * PHP version 5
 * 
 * Implementations for install are based on Croogo Install Plugin.
 * 
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */

class InstallController extends AppController {

	public $name = 'Install';

	public $uses = null;
	public $layout = 'install';

	public $components = array(
		'RequestHandler',
	);

/**
 * Step 0: welcome
 *
 * A simple welcome message for the installer.
 *
 * @return void
 */
	public function index() {
		$this->pageTitle = __('Installation: Welcome', true);
		chmod(TMP, '755');
		chmod(APP . 'config', '755');
	}
/**
 * Step 1: database
 *
 * @return void
 */
	public function database() {
		$this->pageTitle = __('Step 1: Database', true);
		if (!empty($this->data)) {
			// test database connection
			if (mysql_connect($this->data['Install']['host'], $this->data['Install']['login'], $this->data['Install']['password']) &&
				mysql_select_db($this->data['Install']['database'])) {
				// rename database.php.install
				rename(APP . 'config' . DS . 'database.php.install', APP . 'config' . DS . 'database.php');

				// open database.php file
				App::import('Core', 'File');
				$file = new File(APP . 'config' . DS . 'database.php', true);
				$content = $file->read();

				// write database.php file
				if (!class_exists('String')) {
					App::import('Core', 'String');
				}
				$this->data['Install']['prefix'] = ''; //disabled
				$content = String::insert($content, $this->data['Install'], array('before' => '{default_', 'after' => '}'));

				if ($file->write($content)) {
					$this->redirect(array('action' => 'data'));
				} else {
					$this->Session->setFlash(__('Could not write database.php file.', true));
				}
			} else {
				$this->Session->setFlash(__('Could not connect to database.', true));
			}
		}
	}
/**
 * Step 2: insert required data
 *
 * @return void
 */
	public function data() {
		$this->pageTitle = __('Step 2: Run SQL', true);

		if ($this->RequestHandler->isPost()) {
			App::import('Model', 'ConnectionManager');
			$db = ConnectionManager::getDataSource('default');

			if(!$db->isConnected()) {
				$this->Session->setFlash(__('Could not connect to database.', true));
			} else {
				try {
					if (App::import('Lib', 'Migrations.MigrationVersion')) {
						$migration = new MigrationVersion(array(
							'connection' => 'default',
						));
						$migration->run(array(
							'type' => 'app',
							'direction' => 'up',
						));
					}
					$this->redirect(array('action' => 'finish'));
				} catch (MigrationVersionException $e) {
					$this->Session->setFlash($e->getMessage());
				} catch (MigrationException $e) {
					$this->Session->setFlash($e->getMessage());
				}
			}
		}
	}
/**
 * Step 3: finish
 *
 * @return void
 */
	public function finish() {
		Installer::done();
		$this->pageTitle = __('Installation completed successfully', true);
	}
/**
 * Execute SQL file
 *
 * @link http://cakebaker.42dh.com/2007/04/16/writing-an-installer-for-your-cakephp-application/
 * @param object $db Database
 * @param string $fileName sql file
 * @return void
 */
	private function __executeSQLScript($db, $fileName) {
		$statements = file_get_contents($fileName);
		$statements = explode(';', $statements);

		foreach ($statements as $statement) {
			if (trim($statement) != '') {
				$db->query($statement);
			}
		}
	}

	private function __updateData(){
		$data = array(
			'Enumeration' => array(
				1 => __('User documentation',true),
				2 => __('Technical documentation',true),
				3 => __('Low',true),
				4 => __('Normal',true),
				5 => __('High',true),
				6 => __('Urgent',true),
				7 => __('Immediate',true),
				8 => __('Design',true),
				9 => __('Development',true)
			),
			'IssueStatus' => array(
				1 => __('New',true),
				2 => __('Assigned',true),
				3 => __('Resolved',true),
				4 => __('Feedback',true),
				5 => __('Closed',true),
				6 => __('Rejected',true)
			),
			'Role' => array(
				3 => __('Manager',true),
				4 => __('Developer',true),
				5 => __('Reporter',true)
			),
			'Tracker' => array(
				1 => __('Bug',true),
				2 => __('Feature',true),
				3 => __('Support',true)
			)
		);
		foreach ($data as $model_name => $map) {
			app::import('model',$model_name);
			$obj =& ClassRegistry::init($model_name);
			foreach ($map as $id => $name) {
				$obj->id = $id;
				$obj->saveField('name',$name);
			}
		}
		
	}
}

