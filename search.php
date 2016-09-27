<?php
	$input = $_REQUEST["l"];
	$rack = substr($input, 0, -1);
	$regexType = substr($input, -1);
	$wordlist = file_get_contents("CompleteScrabbleWordlist.txt");
	settype($rack, "string");
	if ($regexType == 1) {
		$regex = "/\b(\w)*" . $rack . "(\w)*\b/i";	
	}
	if ($regexType == 2) {
		$regex = "/\b" . $rack . "(\w)*\b/i";
	}
	if ($regexType == 3) {
		$regex = "/\b(\w)*" . $rack . "\b/i";	
	}
	if ($regexType == 4) {
		$regex = "/\b(\w){" . $rack . "}\b/i";	
	}
	if (preg_match_all($regex, $wordlist, $matches)) {
			echo implode (" ", $matches[0]);
	}		

?>