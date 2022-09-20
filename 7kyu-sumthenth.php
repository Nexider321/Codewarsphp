<?php
# Надо сделать цикл который дробит число с определенной цикличностью в 3
# цикл который тру пока i < input 
# и в цикле к каждый раз прибавлять 3 к переменной которую делим
/*Task:

Your task is to write a function which returns the sum of following series upto nth term(parameter).

Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...

Rules:

    You need to round the answer to 2 decimal places and return it as String.

    If the given value is 0 then it should return 0.00

    You will only be given Natural Numbers as arguments.

Examples:(Input --> Output)

1 --> 1 --> "1.00"
2 --> 1 + 1/4 --> "1.25"
5 --> 1 + 1/4 + 1/7 + 1/10 + 1/13 --> "1.57"

 */

function series_sum($n) {
  // Your code here
  $str2 = "";
  $y = 4;
  $s = 1;
  for ($i = 0; $i < $n; $i++) {
	  if ($i === 0) {
		  $str = "1.00";
	  } else { 
	$tmp = 1/$y;	  
	$str += $tmp;
	  $y += 3;
	  } 
  }
    if ($str != '1.00') {
  return $str2 .= round($str,2);
    }
  return $str;
}

echo series_sum(45);

?>
