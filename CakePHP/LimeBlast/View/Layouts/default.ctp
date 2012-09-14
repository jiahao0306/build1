<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title><?php echo $title_for_layout; ?></title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!--meta name="viewport" content="width=device-width,initial-scale=1"-->

		<?php echo $this->Html->css('style.css'); ?>
		<?php echo $this->Html->script('libs/modernizr-2.0.6.min.js'); ?>
		<?php echo $scripts_for_layout; ?>
	</head>

	<body>

		<div id="container" class="container">
			<header class="header" id="header">

			</header>
			<div class="wrap" id="wrap" role="main">

				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>
				<?php echo $content_for_layout; ?>

			</div>
			<footer class="footer" id="footer">

			</footer>
		</div> <!--! end of #container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

		<?php echo $this->Html->script(array('plugins.js', 'script.js')); ?>

		<script> // Change UA-XXXXX-X to be your site's ID
			window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
			Modernizr.load({
				load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
			});
		</script>

		<!--[if lt IE 7 ]>
		  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

	</body>
</html>
