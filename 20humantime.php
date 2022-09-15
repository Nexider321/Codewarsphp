<?php
# Сделать функцию которая принимает позитивные числа (секунды)
# сделать условие на максимальные секунды 359999
# отформатировать их в HH:MM:SS
# 
/*
Write a function, which takes a non-negative integer (seconds) as input and returns the time in a human-readable format (HH:MM:SS)
HH = hours, padded to 2 digits, range: 00 - 99
MM = minutes, padded to 2 digits, range: 00 - 59
SS = seconds, padded to 2 digits, range: 00 - 59
The maximum time never exceeds 359999 (99:59:59)
You can find some examples in the test fixtures.
*/

function timeFormat($sec){
	if ( $sec > 359999){
	return "Секунды не могут прывышать значение в 359999 \n";
	} elseif(is_int($sec)){
	return sprintf('%02d:%02d:%02d', ($sec/ 3600),($sec/ 60 % 60), $sec% 60);	
	} else{
	return "Это должно быть числом";
	}
}
echo timeFormat(359999);

?>
