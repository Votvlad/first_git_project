<?php

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
