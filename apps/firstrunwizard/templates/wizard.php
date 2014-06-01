<div id="firstrunwizard">

<?php $defaults = new OCP\Defaults(); ?>

<a id="closeWizard" class="close">
	<img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/delete.svg')); ?>">
</a>

<h1><?php p($l->t('Welcome to'));?> <a href="http://data.deic.dk/">data.deic.dk</a></h1>
<h3><?php p($l->t('Powered by'));?> <a href="http://owncloud.org/">ownCloud</a></h3>
<br />
<?php if (OC_Util::getEditionString() === ''): ?>
<p>
<?php p($l->t('Non-standard features of this ownCloud installation include:'));?>
</p>
<br />
<p>
<ul>
<li><b><?php p($l->t("Login with"));?> <a href="http://wayf.dk/"> WAYF</a></b> <?php p($l->t("to this web interface with your home-institutions credentials"));?>.</li>
<li><b><?php p($l->t("Set a password"));?></b> <?php p($l->t("in your preferences, allowing login with "));?><a href="http://doc.owncloud.org/server/5.0/user_manual/connecting_webdav.html">WebDAV</a>. <?php p($l->t("Notice that"));?> <em><?php p($l->t("we do not recommend mounting"));?></em>  - <?php p($l->t("so avoid fusedav and Ubuntu's Gnome/Nautilus file manager. Instead we recommend using"));?> <a href="http://doc.owncloud.org/server/5.0/user_manual/connecting_webdav.html">WebDAV</a> clients like <a href="http://cyberduck.io/">Cyberduck</a>, the KDE file manager</a> (Dolphin), <a href="http://www.crossftp.com/">CrossFTP</a> <?php p($l->t("or the command-line tool cadaver - or plain curl and wget (also command-line tools)."));?></li>
<li><b><?php p($l->t("Access your data via HTTPS directly from your virtual machines on"));?> <a href="http://compute.deic.dk/">compute.deic.dk</a></b> <?php p($l->t(" - over a non-public, trusted network, with automatic authentication (i.e. no password). You can do this by pointing your HTTP or WebDAV client to https://10.2.0.254/remote.php/mydav/."));?></li>
<li><b><?php p($l->t("Download data directly"));?></b> <?php p($l->t("to data.deic.dk from external sources - with the 'DL' app on the left toolbar (use this only for few and small files) or via an API - like e.g."));?><br /><code>curl -k -L --request GET "https://10.2.0.254/remote.php/ingest/?provider=S3&password=my_master_password&url=s3://aws-publicdatasets/common-crawl/crawl-002/2010/01/06/0/1262850367358_0.arc.gz"</code></li>
</ul>
</p>
<br />
<p>
<?php p($l->t('We moreover plan on implementing:'));?>
</p>
<br />
<p>
<ul>
<li><b><?php p($l->t("Groups"));?></b> - <?php p($l->t("allow anyone to browse groups, apply for membership, create groups and invite members."));?></li>
<li><b><?php p($l->t("Metadata"));?></b> - <?php p($l->t("allow or enforce description of uploaded data."));?></li>
<li><b><?php p($l->t("Management of you VM images on compute.deic.dk"));?></b> - <?php p($l->t("take advantage of ownCloud's datamanagement features to organize and share your image library."));?></li>
</ul>
</p>
<?php else: ?>
<p><?php p($defaults->getSlogan()); ?></p>
<?php endif; ?>


<h2><?php p($l->t('Get apps to sync your files'));?>:</h2>
<a href="<?php p($_['clients']['desktop']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'desktopapp.png')); ?>" />
</a>
<a href="<?php p($_['clients']['ios']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'appstore.png')); ?>" />
</a>
<a href="<?php p($_['clients']['android']); ?>">
	<img src="<?php print_unescaped(OCP\Util::imagePath('core', 'googleplay.png')); ?>" />
</a>


<p class="footnote">
<?php if (OC_Util::getEditionString() === ''): ?>
<?php print_unescaped($l->t('There’s more information about ownCloud at the <a href="http://doc.owncloud.org/">owncloud  website</a>.')); ?>
</p>
<?php else: ?>
© 2013 <a href="https://owncloud.com" target="_blank">ownCloud Inc.</a>
<?php endif; ?>
</p>

</div>
