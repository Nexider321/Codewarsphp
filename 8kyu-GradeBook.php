<?php
# Принимаем 3 значение суммируем их
# если дробь то округляем его
# и делаем проверки если среднее больше 90 и меньше 100 то возращаем А
# и так далее 

/*
Grade book

Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade.
Numerical Score 	Letter Grade
90 <= score <= 100 	'A'
80 <= score < 90 	'B'
70 <= score < 80 	'C'
60 <= score < 70 	'D'
0 <= score < 60 	'F'

Tested values are all between 0 and 100. Theres is no need to check for negative values or values greater than 100.
 */
function getGrade($a, $b, $c) {
    $sum = $a + $b + $c;
    $notroundedavg = $sum / 3;
    $avg = round($notroundedavg);
    
    if ($avg >= 90 ){
      return "A";
    } elseif($avg >= 80 ){
      return "B";
    } elseif($avg >= 70 ) {
      return "C";
    } elseif($avg >= 60 ) {
      return "D";
    } else {
      return "F";
    }
  
}
echo getGrade(90, 93, 96);
?>
