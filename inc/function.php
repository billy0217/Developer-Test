<?php

function repeat(array $ary){
	$newArray = [];

	for($i = 0; $i < 3; $i++){
		foreach($ary as $r){
			array_push($newArray,$r);
		}
	}

	return $newArray;
}

function reformat(string $string){
	$lowerCase = strtolower($string);
	$removeAlphabetE = preg_replace('/[eio]/', '', $lowerCase);
	$refromat = ucfirst($removeAlphabetE);
	return $refromat;
}