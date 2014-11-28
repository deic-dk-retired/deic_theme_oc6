<?php
/**
 * See lib/defaults.php for a list of possible defaults
 */
class OC_Theme {


	/* e.g. company name, used for footers and copyright notices */
	public function getEntity() {
		return 'DeIC';
	}
	/* can be a longer name, for titles */
	public function getTitle() {
		return 'DeIC data | ownCloud';
	}
	/* short name, used when referring to the software */
	public function getName() {
		return "DeIC";
	}
	public function getSlogan() {
		return "Data-management for research";
	}
	public function getMailHeaderColor() {
		return "#ffffff";
	}
	public function getBaseUrl() {
		return "https://data.deic.dk";
	}
	public function getShortFooter() {
		return 'DeIC';
	} 
	public function getLongFooter() {
		return 'DeIC data - data-management for research';
	}
}

?>