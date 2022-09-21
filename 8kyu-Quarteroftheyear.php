<?php
# если 3 больше или равно чем число то вернуть 1 период
# и тд 
/*Quarter of the year
 * Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

For example: month 2 (February), is part of the first quarter; month 6 (June), is part of the second quarter; and month 11 (November), is part of the fourth quarter.
 */






function quarterOf($month) {
  // Your code here
  if (3 >= $month) {
    return 1;
  }  elseif (6 >= $month) {
    return 2;
  }  elseif (9 >= $month) {
    return 3;
  }  elseif (12 >= $month) {
    return 4;
  }
}





?>
