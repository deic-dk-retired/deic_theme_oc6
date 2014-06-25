<div id="firstrunwizard">

<a id="closeWizard" class="close">
	<img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
</a>

<h2><?php p($l->t('Welcome to data.deic.dk - powered by ownCloud'));?></h2>
<?php if (OC_Util::getEditionString() === ''): ?>
<p><em><?php p($l->t('All your research data and files in one place'));?></em></p>
<?php else: ?>
<p><?php p($theme->getSlogan()); ?></p>
<?php endif; ?>
<br  />
<br  />
<h3><?php p($l->t('First, set a'));?> <a href='/index.php/settings/personal'><?php p($l->t('password'));?></a>, <?php p($l->t('to allow access from your phone, tablet and desktop'));?></h3>
<h2><?php p($l->t('Get the apps to sync your files'));?></h2>
<a target="_blank" href="<?php p($_['clients']['desktop']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'desktopapp.png')); ?>" />
</a>
<a target="_blank" href="<?php p($_['clients']['android']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'googleplay.png')); ?>" />
</a>
<a target="_blank" href="<?php p($_['clients']['ios']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'appstore.png')); ?>" />
</a>

<?php if (OC_Util::getEditionString() === ''): ?>
<h2><?php p($l->t('Upload and manage many and large files'));?></h2>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-webdav')); ?>">
	<img class="appsmall svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'places/folder.svg')); ?>" /> <?php p($l->t('Access files via WebDAV'));?>
</a>
<?php else: ?>
<br><br><br>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-manual')); ?>">
	<img class="appsmall svg" src="<?php print_unescaped(OCP\Util::imagePath('settings', 'help.svg')); ?>" /> <?php p($l->t('Documentation'));?>
</a>
<a target="_blank" class="button" href="<?php p(link_to_docs('user-webdav')); ?>">
	<img class="appsmall svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'places/folder.svg')); ?>" /> <?php p($l->t('Access files via WebDAV'));?>
</a>
<?php endif; ?>

<p class="footnote">
<?php if (OC_Util::getEditionString() === ''): ?>
<?php print_unescaped($l->t('There’s more data.deic.dk specific information on our  <a target="_blank" href="https://data.deic.dk/themes/deic/support/">support pages</a>.', array(link_to_docs('user_manual')))); ?><br><?php print_unescaped($l->t('There’s more ownCloud information in the <a target="_blank" href="%s">documentation</a> and on the ownCloud <a target="_blank" href="http://owncloud.org">website</a>.', array(link_to_docs('user_manual')))); ?><br>
<?php print_unescaped($l->t('If you like data.deic.dk, <a href="mailto:?subject=data.deic.dk&body=data.deic.dk is a great service for the Danish research community to store, share and sync files. All Danish researchers and students can log in at https://data.deic.dk/.">recommend us to your friends</a>!')); ?>
<?php else: ?>
© 2014 <a href="https://owncloud.com" target="_blank">ownCloud Inc.</a>
<?php endif; ?>
</p>

</div>
