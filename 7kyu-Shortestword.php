<?php
/*
 *Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.

 * */

function findShort($str){
  $data = "";
 $strings = explode(" ", $str);
  for($i = 0; $i < count($strings); $i++){
   $data .= strlen( $strings[$i]);
  }
  return min(str_split($data));
}
echo findShort("turns out random we test cases are easier than writing out basic ones");

# or 
#
#
# min(array_map('strlen', (explode(' ', $str))));
?>
