<?php
# функция принимает 3 значения а б с 
# метод возращает правду если треугольник может создан со сторонами данными длинной
# и нет если не получается
# 
#	if ($a <=0 $b <=0 $c <=0){
# сделать проверку на 0 и негативные значения
# и сделать проверку на больше 1

/*
Implement a method that accepts 3 integer values a, b, c. The method should return true if a triangle can be built with the sides of given length and false in any other case.
(In this case, all triangles must have surface greater than 0 to be accepted).
*/


function triangle($a, $b, $c)
{
	if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
		return "false";
	} else {
		return "true";
	}
}
echo triangle(20, 20, 20);
