<!DOCTYPE html>
<!--[if lt IE 7]><html class="ng-csp ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]><html class="ng-csp ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]><html class="ng-csp ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9"><![endif]-->
<!--[if gt IE 9]><html class="ng-csp ie"><![endif]-->
<!--[if !IE]><!--><html class="ng-csp"><!--<![endif]-->

	<?php $defaults = new OC_Defaults(); // initialize themable default strings and urls ?>

	<head data-requesttoken="<?php p($_['requesttoken']); ?>">
		<title>
		DeIC data
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="apple-itunes-app" content="app-id=543672169">
		<link rel="shortcut icon" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>" />
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>" />
		<?php foreach($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>
	
		<?php foreach($_['headers'] as $header): ?>
			<?php
				print_unescaped('<'.$header['tag'].' ');
				foreach($header['attributes'] as $name=>$value) {
					print_unescaped("$name='$value' ");
				};
				print_unescaped('/>');
			?>
		<?php endforeach; ?>
	</head>

	<body id="body-login">
		<div id="login">
			<header><div id="header">
				<a href="/"><img src="<?php print_unescaped(image_path('', 'logo.png')); ?>" class="svg" alt="ownCloud" /> &nbsp; <font size=18><b>data</b></font></a>
				<div id="logo-claim" style="display:none;"><?php p($defaults->getLogoClaim()); ?></div>
			</div></header>
			<?php print_unescaped($_['content']); ?>
		</div>
		<footer>
			<p class="info">
                                DeIC data is powered by <a href="http://owncloud.org/">ownCloud</a>
			</p></footer>
	</body>
</html>
