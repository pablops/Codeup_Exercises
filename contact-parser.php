<?php

function parseContacts($filename)
{
    $contacts = array();
    $filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contentsArray = explode("\n", $contacts);
	// $explodedContents = explode("|", $contacts);
	$otherArray = [];
	foreach($contentsArray as $contact) {
		array_push($otherArray, explode("|", $contact));
	}
	foreach($otherArray as $key => $value){
		$tempo = substr($value[1], 0, 3) . "-" . substr($value[1], 2, 3) . "-" . substr($value[1], 5, 4);
		$otherArray[$key] = array("name" => $value[0], "number" => $tempo);
	}

    return $otherArray;
}

var_dump(parseContacts('contacts.txt'));
