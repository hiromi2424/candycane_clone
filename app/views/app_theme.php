<?php

App::import('View', 'Theme');

class AppThemeView extends ThemeView {

	public $pageTitle;

	function _render($___viewFn, $___dataForView, $loadHelpers = true, $cached = false) {
		if (isset($___dataForView['title_for_layout'])) {
			$this->pageTitle = $___dataForView['title_for_layout'];
		}
		return parent::_render($___viewFn, $___dataForView, $loadHelpers, $cached);
	}

}
