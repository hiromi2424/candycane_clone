<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo Configure::read('app_title'); ?>" />
<meta name="keywords" content="issue,bug,tracker" />
<?php
	echo $this->Html->css('application');
	echo $this->Html->script(array(
		'prototype',
		'effects',
		'dragdrop',
		'controls',
		'application'
	));
	echo $this->Html->css('jstoolbar');
?>
<!--[if IE]>
	<style type="text/css">
	  * html body{ width: expression( document.documentElement.clientWidth < 900 ? '900px' : '100%' ); }
	  body {behavior: url(<?php echo $this->Html->url('/css/csshover.htc') ?>);}
	</style>
<![endif]-->
<?php
	if (isset($header_tags)) {
		echo $header_tags;
	}
	echo $scripts_for_layout;
?>
</head>
<body>
<div id="wrapper">
<div id="top-menu">
	<div id="account">
		<?php echo $this->element('account_menu') ?>
	</div>
	<?php if ($this->Auth->loggedIn()): ?>
		<div id="loggedas">
			<?php __('Logged in as') ?>
			<?php echo $this->Candy->link($this->Auth->user()); ?>
		</div>
	<?php endif; ?>
	<?php echo $this->element('top_menu') ?>
</div>
	  
<div id="header">
	<div id="quick-search">
		<?php echo $this->Form->create(null, array('url' => array('controller' => 'search', 'action' => 'index'), 'type' => 'get')); ?>
		<?php echo $this->Html->link(__('Search', true) . ':', array('controller' => 'search', 'action' => 'index'), array('accesskey' => $this->Candy->accesskey('search'))) ?>
		<?php echo $this->Form->input('q', array(
			'type' => 'text',
			'size' => 20,
			'class' => 'small',
			'accesskey' => $candy->accesskey('quick_search'),
			'div' => false,
			'label' => false
		)) ?>
		<?php echo $this->Form->end() ?>
		<?php if (!empty($currentuser['Membership'])) echo $this->element('project_selector'); ?>
	</div>
		 <h1><?php if (isset($main_project['Project']['name'])) { echo h($main_project['Project']['name']); } else { echo $Settings->app_title; } ?></h1>
<!--	 <h1><%= h(@project && !@project.new_record? ? @project.name : Setting.app_title) %></h1> -->
	
	<div id="main-menu">
		<ul>
<?php foreach ($main_menu as $item): ?>
	<?php
		$url = $item;
		unset($url['class']);
		unset($url['caption']);
		$option = array('class' => $item['class']); 
	?>
			<li><?php echo $this->Html->link(__($item['caption'], true), $url, $option); ?></li>
<?php endforeach; ?>
		</ul>
<!--		 <%= render_main_menu(@project) %> -->
	</div>
</div>

<div id="main"<?php if (!isset($Sidebar)): ?>class="nosidebar"<?php endif; ?>>
	<?php if (isset($Sidebar)): ?>
	<div id="sidebar">
		<?php echo $Sidebar; ?>
	</div>
	<?php endif ?>
	
	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $content_for_layout; ?>
	</div>
</div>

<div id="ajax-indicator" style="display:none;"><span><?php __('Loading...') ?></span></div>

<div id="footer">
	Powered by <?php echo $this->Html->link('candycane', 'https://www.ohloh.net/p/candycane') ?> &copy; 2009 - <?php echo date('Y')?> candycane team
			<br/><?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank', 'escape' => false), null, false
				);
			?>
</div>
</div>
</body>
</html>
