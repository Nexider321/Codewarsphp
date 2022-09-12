<?php
# Есть входное число
# и есть пустая строковая переменная
# делаем проверку если входное число меньше 1 то возращаем пустую строку
# дальше делаем цикл
# добавляем к строке переменную цикла в строковом типе
# дальше добавляем \n что бы разделить строку
# и надо найти функцию которой можно будет разделить
#  slice | .= | explode 
/*
You have to write a function pattern which returns the following Pattern(See Pattern & Examples) upto n number of rows.
Note:Returning the pattern is not the same as Printing the pattern.
Rules/Note:
If n < 1 then it should return "" i.e. empty string.
There are no whitespaces in the pattern.
Pattern:
(n)(n-1)(n-2)...4321
(n)(n-1)(n-2)...432
(n)(n-1)(n-2)...43
(n)(n-1)(n-2)...4
...............
..............
(n)(n-1)(n-2)
(n)(n-1)
(n)
Examples:
pattern(4):
4321
432
43
4
pattern(11):
1110987654321
111098765432
11109876543
1110987654
111098765
11109876
1110987
111098
11109
1110
11
Hint: Use \n in string to jump to next line
*/

function pattern($n) {
	$str2 = "";
	$str = "";
if($n <= 1) {
return $str;
} else {
for ($j = $n; $j > 0; $j--) {
	for ($i = $n; $i > ($n-$j); $i--) { 

		$str .= $i;
		}
	


	$str .= "\n";
}
}
return $str; 


}


echo pattern(4);
?>
