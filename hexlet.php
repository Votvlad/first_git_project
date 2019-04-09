<?php

/*
Реализуйте функцию isPalindrome, которая принимает на вход слово, определяет является ли оно палиндромом и возвращает логическое значение.

Для определения является ли слово палиндромом, достаточно сравнивать попарно символ с обоих концов слова. Если они все равны, то это палиндром. Решите задачу без использования реверса строки.

Примеры использования:

<?php

isPalindrome('radar'); // true
isPalindrome('maam'); // true
isPalindrome('a');     // true
isPalindrome('abs');   // false
*/

function isPalindrome($word)
{
    $lastIndex = strlen($word) - 1;
    for ($i = 0; $i < ceil($lastIndex / 2); $i++) {
        if ($word[$i] !== $word[$lastIndex - $i]) {
            return false;
        }
    }
    return true;
}
var_dump(isPalindrome('assa'));

echo '<br>';

 function reverse(int $num): int
     {  if ($num >= 0){
            $result = strrev($num);
        }
        else {
           // $result =  '-' . strrev($num * (-1)); 
              $result = (int)strrev($num * (-1)) * -1;
        }
     
            return $result;
        }
        print_r(reverse(-23));
       
    echo '<br>';
         
          

        
