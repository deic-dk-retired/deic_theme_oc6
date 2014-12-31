<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr><td>
<table cellspacing="0" cellpadding="0" border="0" width="600px">
<tr>
<td bgcolor="#ffffff" width="20px">&nbsp;</td>
<td bgcolor="#ffffff">
<img src="<?php p(OC_Helper::makeURLAbsolute(image_path('', 'logo-mail.gif'))); ?>" alt="<?php p($theme->getName()); ?>"/>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="20px">&nbsp;</td>
<td style="font-weight:normal; font-size:0.8em; line-height:1.2em; font-family:verdana,'arial',sans;">
<?php
print_unescaped($l->t('Hey there,<br><br>%s shared <a href="%s">»%s«</a> with you.<br><br>', array($_['user_displayname'],  $_['link'], $_['filename'])));
if ( isset($_['expiration']) ) {
	p($l->t("The share will expire on %s.", array($_['expiration'])));
	print_unescaped('<br><br>');
}
//print_unescaped($l->t('<a href="%s">Log in</a> to start sharing.', array("https://data.deic.dk/")));
?>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td width="20px">&nbsp;</td>
<td style="font-weight:normal; font-size:0.6em; line-height:1.2em; font-family:verdana,'arial',sans;">--<br>
data.deic.dk - data-management for research
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
</table>
</td></tr>
</table>
