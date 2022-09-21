<?php
# Сделать проверку если коунт меньше 1 то выдать
# no one likes this
# если больше 4 то сделать -2 и выдать первые два и сколько остальных likes this
/*
 * You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.

Implement the function which takes an array containing the names of people that like an item. It must return the display text as shown in the examples:

[]                                -->  "no one likes this"
["Peter"]                         -->  "Peter likes this"
["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"

Note: For 4 or more names, the number in "and 2 others" simply increases*/

function likes( $names ) {
	$count = count($names);
	if ($count == 0){	
      return "no one likes this";
	}
    elseif ($count <= 1){
      return  $names[0] .  " likes this" ;
    } elseif ($count <= 2) {
    	return $names[0] . " and " . $names[1] . " like this";
    }	elseif ($count <= 3) {
    	return $names[0] . ", " . $names[1] . " and " . $names[2] ." like this";
    }
      else {
           $counts = $count - 2;
	   array_splice($names, 2);
	   return $names[0] . ", " . $names[1] . " and " . $counts . " others like this";
    }
    // Your code here...
}

echo likes([]);
?>
