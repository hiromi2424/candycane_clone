<div class="install">
	<h2><?php echo $this->pageTitle; ?></h2>
	<p><?php echo __('Loading initial data to database which you configured.', true)?></p>
	<?php
		echo $this->Form->create();
		echo $this->Form->end(__('Click here to build your database', true));
	?>
</div>