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

# Первая версия 

function letterChange($word)
{
	$splitWord = str_split($word);
	$newWord = "";
	for ($i = 0; $i < strlen($word); $i++) { 
	if($splitWord[$i] == ' ') {
	$newWord .= ' ';
	} elseif($splitWord[$i] == 'a') {
	$newWord .= 'z';
	} elseif($splitWord[$i] == 'A') {
	$newWord .= 'Z';
	} else {
	$newWord .= chr(ord($splitWord[$i]) + 1);
	}	
  }
	return $newWord;
}


# echo letterChange("Lorem Ipsum a plus A");



# Тут я сделал через свитчи

function letterChangeSwitch($word)
{
	$splitWord = str_split($word);
	$newWord = "";
	for ($i = 0; $i < strlen($word); $i++) { 
		switch($splitWord[$i]) {
		case ' ':
			$newWord .= ' ';
			break;
		case 'a':
			$newWord .= 'z';
			break;
		case 'A':
			$newWord .= 'Z';
			break;
		case 'Z':
			$newWord .= 'A';
			break;
		case 'z':
			$newWord .= 'a';
			break;
		default:
			$newWord .= chr(ord($splitWord[$i]) + 1);
		}
	}
	return $newWord;
}


echo letterChangeSwitch("Lorem Ipsum a plus A and Z plus z");
