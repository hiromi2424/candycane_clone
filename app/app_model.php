<?php

App::import('Lib', 'LazyModel.LazyModel');

class AppModel extends LazyModel {

	public $actsAs = array(
		'Ninja.MagickMethod',
		'Collectionable.Options',
		'Collectionable.VirtualFields',
		'Collectionable.ConfigValidation',
		'Collectionable.MultiValidation',
		'Ninja.CommonValidation',
		'Containable',
	);

	public $defaultOption = 'default';

}
