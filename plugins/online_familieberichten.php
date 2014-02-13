<?php

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class online_familieberichten_plugin extends research_base_plugin {
	static function getName() {
		return 'Online Familieberichten';
	}	
	
	static function create_link($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://www.online-familieberichten.nl/zoeken.asp?sortpers=naam&voornaam='.str_replace(" ", "+", $givn).'&tussenvoegsel='.$prefix.'.&achternaam='.$surn.'&command=zoek';
	}

	static function create_sublink($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return false;
	}
}