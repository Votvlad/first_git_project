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
            (($index + $length) > strlen($str))) {
        return false;
    } else {
        return true;
    }
}

var_dump(isArgumentsForSubstrCorrect('If I look back I am lost!', 19, 6));

echo '<br>';

function countChars($str, $char) {
    $i = strlen($str) - 1;
    $result = 0;
    while ($i >= 0) {

        if ($str[$i] === $char) {
            $result += 1;
        }
        $i -= 1;
    }
    return $result;
}

print_r(countChars('If I look back I am lost', 't'));


echo '<br>';

function shouter($str) {
    $length = strlen($str);
    $result = '';

    if ($length > 0 && $length < 5) {
        return $str;
    } elseif ($length === 5) {
        $counter = 0;
        while ($counter !== 10) {
            $result = $result . $str;
            $counter += 1;
        }
    } elseif ($length > 5) {
        $counter = 0;
        while ($counter !== 100) {
            $result = $result . $str;
            $counter += 1;
        }
    }
    return $result;
}

print_r(shouter('Borya'));

echo '<br>';

function getEvenNumbersUpTo($num) {
    $counter = 1;
    $result = '';

    while ($counter <= $num) {
        if ($counter % 2 === 0) {
            $result = "{$result}{$counter},";
        }

        $counter += 1;
    }

    return $result;
}

print_r(getEvenNumbersUpTo("11"));

echo '<br>';

function filterString($str, $sym) {
    $i = 0;
    $length = strlen($str) - 1;
    $result = '';

    while ($i <= $length) {
        if ($sym === $str[$i]) {
            $result = str_replace($sym, '', $str);
        }
        $i++;
    }
    return $result;
}

print_r(filterString('If I look back I am lost', 'I'));


echo '<br>';

function doesContain($str, $char) {
    $i = 0;
    $length = strlen($str);


    while ($i < $length) {
        if ($str[$i] === $char) {
            return true;
        }
        $i++;
    }
    return false;
}

var_dump(doesContain('Jehnny', 'y'));

echo '<br>';

$sum = 0;

function sumOfSeries($start, $finish) {
    for ($i = $start; $i <= $finish; $i++) {
        $sum += $i;
    }
    return $sum;
}

print_r(sumOfSeries(2, 9));

echo '<br>';

function invertCase($text) {
    // BEGIN
    $len = mb_strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol = mb_substr($text, $i, 1);
        $lowerSymbol = mb_strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= mb_strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }

    return $result;
}

print_r(invertCase('ВлАдИсЛаВ'));

echo '<br>';

function startsWith($text, $substr) {

    return mb_strpos($text, $substr) === 0;
}

var_dump(startsWith('Владислав', 'Влад'));

echo '<br>';

print_r(time());

echo '<br>';


const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

function getYear($timestamp) {
    return 1970 + floor($timestamp / SECONDS_IN_YEAR);
}

print_r(getYear('1554642289'));

echo '<br>';

function getCustomDate($timestamp) 
{
    return date('d/m/Y', $timestamp);
}

print_r(getCustomDate('1554642289'));

echo '<br>';

function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}
print_r(getHexletBirthday());
