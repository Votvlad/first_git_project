<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-04-15
 * Time: 00:16
 */

/*
 * Дана строка. Вывести первый, последний и средний (если он есть)) символы.
 */



/*function showSym($str) {
    $result = strlen($str);
    $even = '';
    if (($result % 2) === 0) {
        $symbols = "{$str[0]}{$str[$result - 1]}";

    }elseif ($result > 1) {
        $symbols = $str[0] .$str[$result - 1] .$str[($result - 1) / 2];
    } else {
        return $str;
    }

     return $symbols;
}
   print_r(showSym('Melchisedek'));
*/
echo "<br>";
/*
 * Дана строка. Вывести первые три символа и последний три символа,
 * если длина строки больше 5. Иначе вывести первый символ столько раз,
 * какова длина строки.
*/
function severalSym ($str) {
    $chars = strlen($str);

    if ($chars > 5){
        $symbols = substr($str, 0, 3) . substr($str, -3);
        return $symbols;
    }
    else {
        return str_repeat($str[0], $result);
    }
    print_r(severalSym('Hello!'));

}
echo '<br>';
$result = strlen('Hello!');
return (str_repeat('Hello!'[0], $result));
