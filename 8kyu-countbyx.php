<?php
# добавить переменную на которую мы будем увеличивать число 
# сделать цикл сколько раз будет повторов
# запушить в массив число
# и прибавить числу х  х
# вернуть массив
/*Create a function with two arguments that will return an array of the first n multiples of x.

Assume both the given number and the number of times to count will be positive numbers greater than 0.

Return the results as an array or list ( depending on language ).
Examples

countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]
countBy(2,5) // should return [2,4,6,8,10]
 */


function countBy($x, $n) {
        $z = [];
        $y = $x;
    for($i = 0; $i < $n; $i++) {
    array_push ($z, $x);
        $x = $x + $y;
    }
    return $z;
}

?>
