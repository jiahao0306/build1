<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>[admin] <?php echo $title_for_layout; ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!--meta name="viewport" content="width=device-width,initial-scale=1"-->

		<?php echo $this->Html->css('admin/style.css'); ?>
		<?php echo $this->Html->script('admin/libs/modernizr-2.0.6.min.js'); ?>
		<?php echo $scripts_for_layout; ?>
	</head>

	<body>

		<div id="container" class="container clearfix">
			<div class="menu" id="menu" role="navigation">
				<hgroup class="logo">
					<h1>cakeAuth</h1>
					<h2>Admin</h2>
				</hgroup>

				<div class="user_box clearfix">
					<img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($auth_user['email']))); ?>?s=60" />
					<strong><?php echo $auth_user['email']; ?></strong><br />
					<em>Administrator</em><br />
					<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout', 'admin' => false)); ?>
				</div>

				<ul class="navigation">
					<li class="users">Users
						<ul>
							<li><?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add', 'admin' => true)); ?></li>
							<li><?php echo $this->Html->link('List Users', array('controller' => 'users', 'action' => 'index', 'admin' => true)); ?></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="main" id="main" role="main">

				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>
				<?php echo $content_for_layout; ?>

			</div>
		</div> <!--! end of #container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/admin/libs/jquery-1.6.2.min.js"><\/script>')</script>

		<?php echo $this->Html->script(array('admin/plugins.js', 'admin/script.js')); ?>

		<!--[if lt IE 7 ]>
		  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

	</body>
</html>
