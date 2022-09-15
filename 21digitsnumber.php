<?php
# функция принимает инт
# создаем пустую переменную с инт значением 0 
# дальше делаем цикл i < длинну наших цифр
# и в цикле создаем функцию. Что бы просматривать часть числа из всех цифр
# субстр i, + длинна комбинации которая нам нужна
# делаем проверку если наша комбинация больше нашей переменной инт 
# то присваеваем ее нум = темп
#
# в конце возращаем после циклов наш нум
#
/*
In the following 6 digit number:
283910
91 is the greatest sequence of 2 digits.
Complete the solution so that it returns the largest five digit number found within the number given.. The number will be passed in as a string of only digits. It should return a five digit integer. The number passed may be as large as 1000 digits.
Adapted from ProjectEuler.net
*/


function greatestSequence($digits) {
	$num = 0;
	for ($i = 0; $i < strlen($digits); $i++){	
		$temp = substr($digits, $i, 5);
		if ($temp > $num) {
		$num = $temp;
		}

	}
return $num;
}

echo greatestSequence(1234567890987654321);
?>

