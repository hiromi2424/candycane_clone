<?php
class Setting extends AppModel {

	public $name = 'Setting' ;

	public $DATE_FORMATS = array(
		'Y-m-d',
		'd/m/Y',
		'd.m.Y',
		'd-m-Y',
		'm/d/Y',
		'd M Y',
		'd F Y',
		'M d, Y',
		'F d, Y',
	);

	public $TIME_FORMATS = array(
		'H:i',
		'h:i A',
	);

	public $USER_FORMATS = array(
		'firstname_lastname' => '%1$s %2$s',
		'firstname' => '%1$s',
		'lastname_firstname' => '%2$s %1$s',
		'lastname_coma_firstname' => '%2$s, %1$s',
		'username' => '%3$s',
	);

	private static $__cacheKey = '__candy_settings__';

	public $recursive = -1;

	/**
	 * instead of self.[] method of ruby version
	 *
	 * @param string $name
	 * @param mixed $value
	 */
	public function store($name, $value) {
		if (is_array($value)) {
			$value = Spyc::YAMLDump($value);
		}

		$setting = $this->findByName($name);

		$this->create(false);
		if (!empty($setting)) {
			$id = $this->id = $setting['Setting']['id'];
			$data = compact('id', 'value');
		} else {
			$data = compact('name', 'value');
		}

		return $this->save($data);
	}

	public function __construct($one = false, $two = null, $three = false) {
		parent::__construct($one, $two, $three);
		$settings = Cache::read(self::$__cacheKey);
		if (empty($settings)) {
			$settings = $this->_read();
		}
		$this->_load($settings);
	}

	protected function _read() {
		$settingsFile = CONFIGS . DS . 'settings.php';
		include $settingsFile;
		if (!isset($settings)) {
			trigger_error(sprintf(__('Missing settings file[%s] or $settings could not be found', true), $settingsFile));
			return array();
		}

		$records = $this->find('all');
		foreach ($records as $record) {
			switch ($record['Setting']['name']){
				case 'per_page_options':
					$settings[$record['Setting']['name']] = explode(',', $record['Setting']['value']);
					break;
				case 'issue_list_default_columns':
					$settings[$record['Setting']['name']] = Spyc::YAMLLoad($record['Setting']['value']);
					// array_slice(array_map('trim',explode('- ',$v['Setting']['value'])),1);
					break;
				default:
					$settings[$record['Setting']['name']] = $record['Setting']['value'];
			}
		}

		Cache::write(self::$__cacheKey, $settings);

		return $settings;
	}

	protected function _load($settings) {
		foreach ($settings as $key => $value) {
			$this->{$key} = $value;
		}
	}

	function _clearCache() {
		Cache::delete(self::$__cacheKey);
	}

}
