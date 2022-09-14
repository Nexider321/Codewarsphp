<?php

# алгоритм шифр цезаря на одну букву в перед
# с помощью функций ord() chr() 
# будем просто прибавлять к букве по 1 биту тем самым двигая её в перед когда будем конвертировать в chr()
/*
Welcome to this Kata. In this Kata you will be given a string. Your task is to replace every character with the letter following it in the alphabet (for example, "b" should be "c", "z" should be "a" and capital "Z" should be "A").
The test cases would not have any special symbols or numbers but it will have spaces. And the upper and lower cases should be retained in your output.
For Example:
letterChange('Lorem Ipsum')    // return Mpsfn Jqtvn
*/

function letterChange($word) {
	$string = "";
	$changedWord = ord($word);
	for ($i = 0; $i < 20; $i++) {
		$string .= chr($changedWord + $i );
		
	}
return $string;
}

	
	
function bestSolution($word) {
  $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$newWord = "";
  for ($i = 0; $i < strlen($word); $i++) {
	  switch(substr($i, $i+1)){
	  case ' ': 
		 $newWord .= ' ';
		  break;
	  case 'Z':
		  $newWord .= 'Z';
		  break;
	  case 'z':
		 $newWord .= 'z';
		 break;
		  default:
		 for($j = 0; $j < strlen($alphabet); $j++){
			 if (substr($alphabet,$j,$j+1) == substr($word, $i,$i+1)){
				 $newWord .= substr($alphabet, $j+1,$j+2);
		 }
	  
	  }

  }
}

return $newWord;
}
echo bestSolution("zasdldalkf Lorem IpsumZZ");
# echo letterChange('Lorem Ipsum');

?>
