<div class="install index">
	<?php
		$check = true;

		// tmp is writable
		if (is_writable(TMP)) {
			echo '<p class="success">' . __('Your tmp directory is writable.', true) . '(' . TMP . ')</p>';
		} else {
			$check = false;
			echo '<p class="error">' . __('Your tmp directory is NOT writable.', true) .'(chmod -R 777 ' .TMP . ')</p>';
		}

		// config is writable
		if (is_writable(APP.'config')) {
			echo '<p class="success">' . __('Your config directory is writable.', true) . '(' . APP . 'config'.')</p>';
		} else {
			$check = false;
			echo '<p class="error">' . __('Your config directory is NOT writable.', true) . '(chmod -R 777 ' . APP . 'config'.')</p>';
		}

		// php version
		$requireVersion = '5.2.6';
		$minimumVersion = '5.0.0';
		if (version_compare(PHP_VERSION, $requireVersion, '>=')) {
			 echo '<p class="success">' . sprintf(__('PHP version %s > %s', true), phpversion(), $requireVersion) . '</p>';
		} else {
			 $check = version_compare(PHP_VERSION, $minimumVersion, '>=');
			 echo '<p class="error">' . sprintf(__('PHP version %s < %s', true), phpversion(), $requireVersion) . '</p>';
		}

		if ($check) {
			echo '<p>' . $html->link(__('Click here to begin installation',true), array('action' => 'database')) . '</p>';
		} else {
			echo '<p>' . __('Installation cannot continue as minimum requirements are not met.', true) . '</p>';
		}
	?>
</div>