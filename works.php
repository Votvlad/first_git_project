<?php

function hasTargaryenReference($str) {
	$prefix = substr($str, 0, 9);
	return $prefix === 'Targaryen';
}

var_dump(hasTargaryenReference('Targaryen'));

echo '<br>';

function hasTargaryenEnding($str) {
	$prefix = substr($str, 0, 9);
	return $prefix === 'Targaryen';
}

var_dump(hasTargaryenEnding('Targaryen'));

echo '<br>';

function isLannisterSoldier($armor, $shield) {
	return $armor === 'red' && $shield === null || $shield === 'lion';
}

var_dump(isLannisterSoldier('', 'lion'));

echo '<br>';

function getSentenceTone($sentence) {
	$ura = strtoupper($sentence);
	if ($sentence === $ura) {
		return 'scream';
	}
	return 'normal';
}

print_r(getSentenceTone('SLEEP'));

echo '<br>';
/*
  function convertString($string){
  if($string !== ucfirst($string)) {
  $string = strrev($string);
  } else if ($string === ucfirst($string)) {
  $string = $string;
  }
  return $string;
  }
  print_r(convertString('Hello'));
 */

function convertString1($string) {
	return $string === ucfirst($string) ? $string : strrev($string);
}

print_r(convertString1('hello'));

echo '<br>';

function generateAmount($quantity, $cost) {
	$result = $quantity ?: $cost * 3;
	return $result;
}

print_r(generateAmount(5, 6));

echo '<br>';

// if... else
function normalizeUrl($url) {
	if (strpos($url, 'http') === 0) {
		$domain = substr($url, 7);
	} else {
		$domain = $url;
	}
	return "https://{$domain}";
}

print_r(normalizeUrl('yandex.ru'));

echo '<br>';

//if... elseif... else    
function whoIsThisHouseToStarks($surname) {
	if ($surname === 'Karstark' || $surname === 'Tully') {
		$surname = 'friend';
	} elseif ($surname === 'Lannister' || $surname === 'Frey') {
		$surname = 'enemy';
	} else {
		$surname = 'neutral';
	}
	return $surname;
}

print_r(whoIsThisHouseToStarks('Lenin'));

echo '<br>';

function convertString($string) {
	if ($string[0] != strtoupper($string[0])) {
		$string = strrev($string);
	}
	return $string;
}

print_r(convertString('Hello!'));

echo '<br>';

function convertEvenString($string) {
	$result = strlen($string);
	if (($result % 2) === 0) {
		return strrev(strtolower($string));
	}
	return $string;
}

print_r(convertEvenString('Hello!'));


echo '<br>';

function printNumbers($firstNumber) {
	$i = 4;
	while ($i >= 1) {
		print_r("{$i}\n");
		$i = $i - 1;
	}
	print_r('finished!');
}

printNumbers('4');
echo '<br>';

function HowMuchSymbols($str) {
	return strlen($str);
}

print_r(HowMuchSymbols('Hello'));

echo '<br>';

function reverseString($str) {
	$index = strlen($str) - 1;
	$reversedString = '';

	while ($index >= 0) {
		$currentChar = $str[$index];
		$reversedString = "{$reversedString}{$currentChar}";
		$index = $index - 1;
	}

	return $reversedString;
}

print_r(reverseString('Game Of Thrones'));

echo '<br>';

function mysubstr($str, $length) {
	$i = 0;
	$substr = '';

	while ($i < $length) {
		$currentChar = $str[$i];
		$substr = "{$substr}{$currentChar}";
		$i = $i + 1;
	}
	return $substr;
}

print_r(mysubstr('If I look back I am lost!', 23));

echo '<br>';

function isArgumentsForSubstrCorrect($str, $index, $length) {
	if (($length < 0) ||
	($index < 0) ||
	($index > strlen($str) - 1) ||
	(($index + $length) > strlen($str)))
	{
	return false;
	} else {
		return true;
	}
}

var_dump(isArgumentsForSubstrCorrect('If I look back I am lost!', 19, 6));

echo '<br>';

function countChars($str, $char){
        $i =  strlen($str) - 1;
		$result = 0;
    while($i >= 0) {
        
        if ($str[$i] === $char){
        $result += 1;    
        }
        $i -= 1; 
	}
        return $result;
	} 
    print_r(countChars('If I look back I am lost', 't'));
