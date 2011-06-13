<?php

if (!defined('__INSTALLER__CHECK__FILE')) {
	define('__INSTALLER__CHECK__FILE', TMP . 'persistent'. DS . 'installed');
}

class Installer {

	protected static $_installed = null;

	public static function installed() {
		if (self::$_installed === null) {
			self::detectInstalled();
		}
		return self::$_installed;
	}

	public static function detectInstalled() {
		self::$_installed = file_exists(__INSTALLER__CHECK__FILE);
	}

	public static function done() {
		$result = @touch(__INSTALLER__CHECK__FILE);
		return self::installed();
	}

}