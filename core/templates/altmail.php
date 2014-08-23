<?php
print_unescaped($l->t("Hey there,\n\n%s has shared %s with you on data.deic.dk.\nYou can access it here: %s\n\n", array($_['user_displayname'], $_['filename'], $_['link'])));
if ( isset($_['expiration']) ) {
	print_unescaped($l->t("The share will expire on %s.", array($_['expiration'])));
	print_unescaped('\n\n');
}
?>

--

<?php p($l->t("<a href='https://data.deic.dk/'>data.deic.dk</a> - data-management for research. <a href='https://data.deic.dk/'>Log in</a> to start sharing.")); ?>
