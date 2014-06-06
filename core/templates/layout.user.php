<!DOCTYPE html>
<!--[if lt IE 7]><html class="ng-csp ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]><html class="ng-csp ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]><html class="ng-csp ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9"><![endif]-->
<!--[if gt IE 9]><html class="ng-csp ie"><![endif]-->
<!--[if !IE]><!--><html class="ng-csp"><!--<![endif]-->

	<?php $defaults = new OC_Defaults(); // initialize themable default strings and urls ?>
	
	<head data-user="<?php p($_['user_uid']); ?>" data-requesttoken="<?php p($_['requesttoken']); ?>">
		<title>
			DeIC data | ownCloud
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

	<body id="<?php p($_['bodyid']);?>">
	<div id="notification-container">
		<div id="notification"></div>
	</div>
	<header><div id="header">
			<a href="<?php print_unescaped(link_to('', 'index.php')); ?>" title="" id="owncloud"><img class="svg"
				src="<?php print_unescaped(image_path('', 'logo-wide.svg')); ?>" alt="ownCloud" /></a>
			<div id="logo-claim" style="display:none;"><?php p($defaults->getLogoClaim()); ?></div>
			<ul id="settings" class="svg">

				<?php if(!stristr($_['user_uid'], '@')): ?>

				<span id="expand">
					<span id="expandDisplayName"><?php  p(trim($_['user_displayname']) != '' ? $_['user_displayname'] : $_['user_uid']) ?></span>
					<img class="svg" src="<?php print_unescaped(image_path('', 'actions/caret.svg')); ?>" />
				</span>
				<div id="expanddiv">
				<?php foreach($_['settingsnavigation'] as $entry):?>
					<li>
						<a href="<?php print_unescaped($entry['href']); ?>" title=""
							<?php if( $entry["active"] ): ?> class="active"<?php endif; ?>>
							<img class="svg" alt="" src="<?php print_unescaped($entry['icon']); ?>">
							<?php p($entry['name']) ?>
						</a>
					</li>
				<?php endforeach; ?>
					<li>
						<a id="logout" href="<?php print_unescaped(link_to('', 'index.php')); ?>?logout=true">
							<img class="svg" alt="" src="<?php print_unescaped(image_path('', 'actions/logout.svg')); ?>" />
							<?php p($l->t('Log out'));?>
						</a>
					</li>
				</div>

				<?php else: ?>

				<span id="expandDisplayName">Logged in as:&nbsp;&nbsp;<a title="Settings" id='tktuserlink' href="/index.php/settings/personal"><?php  p(trim($_['user_displayname']) != '' ? $_['user_displayname'] : $_['user_uid']) ?></a></span>
				<span id="logout"><a title="Log out" href="<?php print_unescaped(link_to('', 'index.php')); ?>?logout=true">
							<?php p($l->t('log out'));?>
				</a></span>

				<?php endif ?>


			</ul>

			<form class="searchbox" action="#" method="post">
				<input id="searchbox" class="svg" type="search" name="query"
					value="<?php if(isset($_POST['query'])) {p($_POST['query']);};?>"
					autocomplete="off" x-webkit-speech />
			</form>
		</div></header>

        <nav><div id="navigation">                                                                                                                                                    
            <ul id="apps" class="svg">                                                                                                                                                
                <div class="wrapper"><!-- for sticky footer of apps management -->                                                                                                    
                <?php foreach($_['navigation'] as $entry): ?>                                                                                                                         
                    <li data-id="<?php p($entry['id']); ?>">                                                                                                                          
                        <a href="<?php print_unescaped($entry['href']); ?>" title=""                                                                                                  
                            <?php if( $entry['active'] ): ?> class="active"<?php endif; ?>>                                                                                           
                            <img class="icon svg" src="<?php print_unescaped($entry['icon']); ?>"/>                                                                                   
                            <span>                                                                                                                                                    
                                <?php p($entry['name']); ?>                                                                                                                           
                            </span>                                                                                                                                                   
                        </a>                                                                                                                                                          
                    </li>                                                                                                                                                             
                <?php endforeach; ?>                                                                                                                                                  
                <?php if(OC_User::isAdminUser(OC_User::getUser())): ?>                                                                                                                
                    <div class="push"></div><!-- for for sticky footer of apps management -->                                                                                         
                <?php endif; ?>                                                                                                                                                       
                </div>                                                                                                                                                                
                                                                                                                                                                                      
                <!-- show "More apps" link to app administration directly in app navigation, as sticky footer -->                                                                     
                <?php if(OC_User::isAdminUser(OC_User::getUser())): ?>                                                                                                                
                    <li id="apps-management">                                                                                                                                         
                        <a href="<?php print_unescaped(OC_Helper::linkToRoute('settings_apps').'?installed'); ?>" title=""                                                            
                            <?php if( $entry['active'] ): ?> class="active"<?php endif; ?>>                                                                                           
                            <img class="icon svg" src="<?php print_unescaped(OC_Helper::imagePath('settings', 'apps.svg')); ?>"/>                                                     
                            <span>                                                                                                                                                    
                                <?php p($l->t('Apps')); ?>                                                                                                                            
                            </span>                                                                                                                                                   
                        </a>                                                                                                                                                          
                    </li>                                                                                                                                                             
                <?php endif; ?>                                                                                                                                                       
            </ul>                                                                                                                                                                     
        </div></nav>    
        
		<div id="content-wrapper">
			<div id="content">
				<?php print_unescaped($_['content']); ?>
			</div>
		</div>
	</body>
</html>
