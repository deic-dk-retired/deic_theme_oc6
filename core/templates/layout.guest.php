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
<!--above change the title of the page in the browser tabs --> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="apple-itunes-app" content="app-id=543672169">

        <meta property="og:title" content="DeIC data - Cloud storage for scientists" />
        <meta property="og:description" content="DeIC data is a new service for the Danish research community to store, share and sync files." />
        <meta property="og:image" content="https://data.deic.dk/themes/deic/core/img/logo_large.png" />

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
    
        <script src="/3rdparty/bpopup/jquery.bpopup.min.js"></script>
</head>

    <body id="body-login">
      

      <div id="bodywrapper">
        <div id="maincontent">
          <div id="beta_tag"><img src="<?php print_unescaped(image_path('', 'beta.png')); ?>" width="100px"></div>
          <div id="login">
            <div id="header">
              <a href="/"><img src="<?php print_unescaped(image_path('', 'logo-trnsp.png')); ?>" class="svg" alt="ownCloud" /><span id="logodata" class="deic_green">data</span></a> <!--&nbsp; <font size=18><b>data</b></font></a> -->
              <div id="logo-claim" style="display:none;"><?php p($defaults->getLogoClaim()); ?></div>
            </div>
            <?php print_unescaped($_['content']); ?>
          </div>
          <div id="tagline">Cloud storage for <span class="deic_green">scientists</span></div>
        </div>
      </div>
      <div id="footer">
        <div id="hrule"></div> 
        <div id="info_buttons"> 
          <a id="about">about this service</a>
          <div id="aboutPop" class="popup">
            <div class="pad">
               <span class="b-close">
               <img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
               </span>
               <h2>About this service</h2>
               <p> data.deic.dk is an online data storage and synchronization service provided by the Danish 
                   e-Infrastructure Cooperation (<a class="deic_green" href="http://www.deic.dk">DeIC</a>) specifically aimed at researchers and scientists
                   at Danish academic institutions. 
               </p><p>
                   Built on open-source technology, data.deic.dk has been made for safe-keeping research data which potentially consist
                   of very large files. data.deic.dk therefore offers separate storage areas for files that
                   need to be sync'ed to desktops, laptops, and mobile devices (i.e., documents, notes, slides, 
                   teaching material, etc.) and for files that are not suitable for sync'ing (i.e., large data sets). 
                   We also offer chunked uploading, so that upload of large files can be resumed if the 
                   connection is temporarily lost. In addition, data.deic.dk supports import of data from external
                   providers through http or ftp.
               </p><p>
                   data.deic.dk is attached directly to "Forskningsnettet" so that clients accessing our
                   servers from within any Danish academic institution will experience up- and download speeds of
                   up to 10 Giga-bits/second, which is similar to accessing an external USB hard drive.  
               </p><p>
                   
               </p>
             </div>
          </div>
            <script>;(function($) {
                $(function() {
                  $('a#about').bind('click', function(e) {
                    e.preventDefault();
                    $('#aboutPop').bPopup( {opacity: 0.4,modalColor: '#000'} );
                  });
                });
                })(jQuery); 
           </script>

          <a id="terms">terms and conditions</a>
          <div id="termsPop" class="popup">
            <div class="pad">
               <span class="b-close">
                  <img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
               </span>
               <h2>Terms and conditions</h2>
               <p> 
                   In order to use data.deic.dk, you must comply to these terms and all applicable laws.
                   By using any service provided by data.deic.dk you implicitly agree to be bound by these terms.               
               </p>
               <P>  
                  (i) In order to use data.deic.dk you have to be affiliated to an 
                    academic institution located within Denmark. We may, in sole discretion, grant or revoke 
                    exceptions to this rule on an individual basis. 
               </p>
                <p>
                    (ii) data.deic.dk is provided "as is". We do not give any warranty and we can not guarantee 
                    the safety of your data, neither do we accept any liability for loss or damage of data.
                    We can also not be held responsible for unintentional deletion or modification of files.
                    We do not guarantee the availability of our service and we are not liable for neither planned
                    nor unexpected "down time".  
                     
               </p> 
               <p>    
                  (iii) Uploading illegal or copyrighted material for which you cannot claim ownership is strictly 
                    forbidden. It is your responsibility to ensure that content stored within your account on
                    data.deic.dk does not violate these terms. Passwords for accessing the service are strictly 
                    personal and it is not allowed to share passwords with any third party.
               </p>
               <p>
                  (iv) We reserve the right to revise these terms at any time, with or without prior notice.
               </p>
               <p>
                  (v) We will, from time to time, deploy necessary changes, updates, or enhancements to 
                    data.deic.dk. We may add, suspend, or remove features or functionalities.
               </p>
                <p>
                  (vi) We reserve the right to terminate or suspend your account on data.deic.dk, with or 
                    without prior notice. You acknowledge that in this case, you may no longer have access to
                    any material stored with data.deic.dk.
               </p>
             </div>
          </div>
            <script>;(function($) {
                $(function() {
                  $('a#terms').bind('click', function(e) {
                    e.preventDefault();
                    $('#termsPop').bPopup( {opacity: 0.4, modalColor: '#000'} );
                  });
                });
                })(jQuery); 
           </script>
                  <a id="next">what's next?</a>
                  <div id="nextPop" class="popup">
<div class="pad">
               <span class="b-close">
                 <img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
               </span>
               <h2>What's next?</h2>
               <p>
                  - compute.deic.dk 
               </p> 
               <p>
                  - Integrated file meta data 
               </p> 
               <p>
                  - Real-time collaborative editing (Open Office, Latex, ...)  
               </p> 
               <p>
                  - iPython interface 
               </p> 
               <p>
                  - deic.data.dk API 
               </p> 
</div>
          </div>
            <script>;(function($) {
                $(function() {
                  $('a#next').bind('click', function(e) {
                    e.preventDefault();
                    $('#nextPop').bPopup( {opacity: 0.4, modalColor: '#000'} );
                  });
                });
                })(jQuery); 
           </script>

</div>
                




<p class="footinfo">                  
DeIC data is powered by <a href="http://owncloud.org/">ownCloud</a>                  
</p>                 
</div>           
</body>                  
</html>
