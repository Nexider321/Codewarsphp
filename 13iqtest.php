<?php
# даётся массив чисел
# мы должны разделить его на одиночные цифры
# мы делим его на второе и третье число и это мы проверяем на то что в тесте есть только одно значение 
# дальше мы делаем цикл и делим на 2 и проверяем массив с 1 индекса по последующии на совпадение типа с 0 индексом который мы тоже делим на 2 
# и если индекс не совпадает мы возращаем эту переменную не забывая добавить + 1 потому что индекс начинался с 0
# 
/*
Bob is preparing to pass IQ test. The most frequent task in this test is to find out which one of the given numbers differs from the others. Bob observed that one number usually differs from the others in evenness. Help Bob — to check his answers, he needs a program that among the given numbers finds one that is different in evenness, and return a position of this number.
! Keep in mind that your task is to help Bob solve a real IQ test, which means indexes of the elements start from 1 (not 0)
Examples :
iqTest("2 4 7 8 10") => 3 // Third number is odd, while the rest of the numbers are even
iqTest("1 2 1 1") => 2 // Second number is even, while the rest of the numbers are odd
*/
function iqtest($array){
	$number = explode(" ", $array);
	
	if($number[0]%2 !== $number[1]%2 && $number[0]%2 !== $number[2]%2) {
	return 1;
	} else {
		for ($i = 1; $i < count($number); $i++){
	 if($number[$i]%2 !== $number[0]%2){
	 return $i+1;
	 }
	}
}
}
echo iqtest("2 4 7 8 10");
?>
