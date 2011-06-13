<?php

CandyAutoLoader::uses(array(
	'File',
	'Folder',
	'String',
	'I18n',
	'L10n',
	'Security',
	'Xml',
), 'Core');

class CandyAutoLoader {

	protected static $_map = array();
	protected static $_tried = array();

	public static function uses($classes, $options = array()) {
		$default = array(
			'type' => 'Lib',
		);

		if (is_string($options)) {
			$options = array('type' => $options);
		}

		$options = array_merge($default, $options);
		foreach ((array)$classes as $class) {
			self::$_map[$class] = $options;
		}
	}

	public static function load($class) {
		if (isset(self::$_map[$class]) && !in_array($class, self::$_tried)) {
			$options = self::$_map[$class];

			if (strtolower($options['type']) === 'file') {
				if (isset($options['file']) && file_exists($options['file'])) {
					@include($options['file']);
				}
				return class_exists($class);
			}

			self::$_tried[] = $class;
			return App::import(ucfirst($options['type']), $class);
		}

		return false;
	}

}