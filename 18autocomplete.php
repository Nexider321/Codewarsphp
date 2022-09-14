<?php
# Функция принимает  текст который надо найти и словарь слов (Массив)
#  надо сделать Регулярное выражение которые убирает цифры и символы и оставляет только текст
# создаём пустой массив что бы было что вернуть
# дальше делаем цикл и проверяем каждое слово в словаре на первые буквы совпадение в зависимосте какая длинна у инпута
# Если есть совпадение типов то пушим в наш массив эти слова
# и если в массиве меньше 5 слов а если больше то не пушим и возращаем пустой массив
#

/*
It's time to create an autocomplete function! Yay!
The autocomplete function will take in an input string and a dictionary array and return the values from the dictionary that start with the input string. If there are more than 5 matches, restrict your output to the first 5 results. If there are no matches, return an empty array.
Example:
autocomplete('ai', ['airplane','airport','apple','ball']) = ['airplane','airport']
For this kata, the dictionary will always be a valid array of strings. Please return all results in the order given in the dictionary, even if they're not always alphabetical. The search should NOT be case sensitive, but the case of the word should be preserved when it's returned.
For example, "Apple" and "airport" would both return for an input of 'a'. However, they should return as "Apple" and "airport" in their original cases.
Important note:
Any input that is NOT a letter should be treated as if it is not there. For example, an input of "$%^" should be treated as "" and an input of "ab*&1cd" should be treated as "abcd".
*/


function autocomplete($input,$dict,$filter){
	$input_edit = preg_replace($filter,"",$input);	
	$lenght = strlen($input_edit);
	$output = [];
	for ($i = 0; $i<count($dict); $i++){
		if(strcasecmp($input_edit,substr($dict[$i], 0, $lenght)) == 0){
			array_push($output,$dict[$i]);
		}
	}
	return $output;	
}

print_r (autocomplete("3a3", $array, $filter));


class AutoComplete {

public $filter = "/[^a-zA-Z-]/";
public $dict = ['airplane', 'airport','apple','ball', 'Fox', 'Mox', 'Brunirupucis', 'Afox', 'ATrex','Acall','Agenskalns','Agent'];

public function __construct($input, $filter) {
	$this->input = preg_replace($filter, "", $input);
}

public function Sayfilteredtext(){
return $this->input;
}

}

$Firstsearch = new AutoComplete("22a22");

echo $Firstsearch->




?>


