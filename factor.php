<?php


# Вернуть правду если это фактор
# Вернуть неправду если это не фактор
# Если у цифры есть остаток то это фактор
/*
This function should test if the factor is a factor of base.
Return true if it is a factor or false if it is not.
Information
Factors are numbers you can multiply together to get another number.
2 and 3 are factors of 6 because:
2 * 3 = 6
You can find a factor by dividing numbers. If the remainder is 0 then the number is a factor.
In Javascript you can use % to check for a remainder
For example 2 is not a factor of 7 because:
7 % 2 = 1
*/


function isFactor($n, $i)
{
 if($n % $i === 0)
 {
	 return "true";
 } else {
 return "false";
 }

}
echo isFactor(8, 2);



?>

