<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-04-15
 * Time: 00:16
 */

/*Дана строка. Вывести ее три раза через запятую и 
  показать количество символов в ней.
*/
function repeatString($string) {
$sum = strlen($string);
return str_repeat($string . ",", 3). $sum;

}
print_r(repeatString('Zurbagan'));

echo "<br>";

/*
 * Дана строка. Вывести первый, последний и средний (если он есть)) символы.
 */

function showSym($str) {
    $length = strlen($str);
    if (($length % 2) === 0) {
        $symbols = "{$str[0]}{$str[$length - 1]}";

    }elseif ($length > 1) {
        $symbols = $str[0] .$str[$length - 1] .$str[($length - 1) / 2];
    } else {
        return $str;
    }

     return $symbols;
}
   print_r(showSym('Melchisedek'));

echo "<br>";
/*
 * Дана строка. Вывести первые три символа и последний три символа,
 * если длина строки больше 5. Иначе вывести первый символ столько раз,
 * какова длина строки.
*/
function severalSym ($str) {
    $length = strlen($str);
    
	if ($length > 5){
		$symbols = substr($str, 0, 3) . substr($str, -3);
    
	} else {
        $symbols = (str_repeat($str[0], $length));
		
    }
            return $symbols;
    }

    print_r(severalSym('Avess'));


echo '<br>';
/*
Сформировать строку из 10 символов. 
На четных позициях должны находится четные цифры, на нечетных позициях - буквы.
*/

function lettersAndnumbers ($str) {
	
}

