<?php
# нужно сделать функцию которая принимает два значения
# сначало делаем проверку на то что стороны не отрицательные и не равны нулю и значения инт
# Дальше просто делаем теорему пифагора $c = sqrt($a*$a+$b*$b)

/*
To solve this Kata, complete the function, calculateHypotenuse(a,b), which will return the length of the hyptenuse for a right angled triangle with the other two sides having a length equal to the inputs. More details:
The returned value should be a number rounded to three decimal places
An error should be thrown if an invalid input is provided (inputs should both be numbers that are above zero)
calculateHypotenuse(1,1); // returns 1.414
calculateHypotenuse(3,4); // returns 5
calculateHypotenuse(-2,1); // throws error
calculateHypotenuse("one", "two"); // throws error
For more information on the hypotenuse, visit: http://en.wikipedia.org/wiki/Hypotenuse
*/
function calculateHypotenuse( $a, $b){
	if ($a < 0 || $b < 0){
	return "Error";	
	} elseif(is_int($a) || is_int($b)){
 	$c = sqrt($a*$a+$b*$b);
	return round($c, 3);
	} 
       	else {
	return "error";
	}
}
echo calculateHypotenuse(2,4);


?>
