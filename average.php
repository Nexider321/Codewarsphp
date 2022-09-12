<?php
# функция принимает массив только чисел и возращает среднее
# если программа увидит тип стринг то возращает не правильно
# Если надо сделать цикл что бы узнать сумму всех чисел
# и когда мы знаем сумму и можем поделить на длину массива
# и мы узнаем среднее значение
/*
Make a program that takes a list of a random amount (but will always have atleast 1 number in) of numbers and returns the average, or mean, of the numbers. Also the program should return "Incorrect" if the value entered is a string.
(Use integer division to divide the numbers, (if you actually use the division method))
Ex: If input is [70, 70, 70, 70, 70] the program should return 70 (for obvious reasons)
*/
function avg($array){
	foreach ($array as $arrays){
if (is_string($arrays)==true){	
	return "incorrect";
	}
}

$sum = 0;
 for ($i=0; $i < count($array); $i++){
	$sum  = $sum + $array[$i];
}

$avg = $sum / count($array);
return $avg;

}



	
echo avg($array = [90,40,30,90]);
?>
