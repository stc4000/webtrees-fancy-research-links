<?php

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class zeeuwengezocht_plugin extends research_base_plugin {
	static function getName() {
		return 'Zeeuwen Gezocht';
	}
	
	/**
	* Based on function print_name_record() in /library/WT/Controller/Individual.php
	*/
	static function create_link(WT_Fact $event) {
		if (!$event->canShow()) {
			return false;
		}
		$factrec = $event->getGedCom();
		// Create a dummy record, so we can extract the formatted NAME value from the event.
		$dummy=new WT_Individual(
			'xref',
			"0 @xref@ INDI\n1 DEAT Y\n".$factrec,
			null,
			WT_GED_ID
		);
		$all_names=$dummy->getAllNames();
		$primary_name=$all_names[0];
		
		$givn   = $primary_name['givn'];
		$surn   = $primary_name['surn'];
		if($surn != $primary_name['surname']) {
			$prefix = substr($primary_name['surname'], 0, strpos($primary_name['surname'], $surn) - 1);
		}
		else {
			$prefix = "";
		}
		
		return $link = 'http://www.zeeuwengezocht.nl/nl/zoeken?mivast=1539&miadt=239&mizig=862&miview=tbl&milang=nl&micols=1&mires=0&mip3='
						.$surn.'&mip2='.$prefix.'&mip1='.$givn;
	}
	
	static function create_sublink(WT_Fact $event) {
		return false;
	}
}
