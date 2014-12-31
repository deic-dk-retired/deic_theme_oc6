<?php
print_unescaped($l->t('Hey there,<br><br>%s shared <a href="%s">»%s«</a> with you.<br><br>', array($_['user_displayname'],  $_['link'], $_['filename'])));
if ( isset($_['expiration']) ) {
	print_unescaped($l->t("The share will expire on %s.", array($_['expiration'])));
	print_unescaped('\n\n');
}
?>

--

<?php p($l->t("data.deic.dk - data-management for research")); ?>
