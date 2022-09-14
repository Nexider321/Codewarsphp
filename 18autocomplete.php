<?php
# Функция принимает  текст который надо найти и словарь слов (Массив)
#  надо сделать Регулярное выражение которые убирает цифры и символы и оставляет только текст
# создаём пустой массив что бы было что вернуть
# дальше делаем цикл и сверяем каждую букву с помощью функции strcasecmp(наш инпут, первые буквы инпута) 
#  проверяем только на длинну нашего инпута substr()
# 
# Если есть совпадение типов то пушим в наш массив эти слова
# и если в массиве больше 5 слов то режим его с помощью array_slice до 5 слов
# если же у нас не нашло совпадения то просто возращаем пустой массив
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

 $filter = "/[^a-zA-Z-]/";

 $array = ['airplane', 'airport','apple','ball', 'Fox', 'Mox', 'Brunirupucis', 'Afox', 'ATrex','Acall','Agenskalns','Agent'];
function autocomplete($input,$dict,$filter){
	$input_edit = preg_replace($filter,"",$input);	
	$lenght = strlen($input_edit);
	$output = [];
	for ($i = 0; $i<count($dict); $i++){
		if(strcasecmp($input_edit,substr($dict[$i], 0, $lenght)) == 0){
			array_push($output,$dict[$i]);
		}
	}
	return array_slice($output, 0, 5);	
}
print_r (autocomplete("3a3", $array, $filter));





# Тут я попробовал первый раз классы

class AutoComplete {

public static $filter = "/[^a-zA-Z-]/";
public static $dict = ['airplane', 'airport','apple','ball', 'Fox', 'Mox', 'Brunirupucis', 'Afox', 'ATrex','Acall','Agenskalns','Agent'];
public $input;
public static $output = [];

public function __construct($input) {
	$this->input = $input;
}

public function filteredText(){
	return preg_replace(self::$filter,"",$this->input);
}

public function autoWord(){
	return 'This word is ' . print_r($this->wordFinder()); 
}

public function strLen(){
	return strlen($this->filteredText());
}

public function wordFinder(){
	for ($i = 0; $i < count(self::$dict); $i++){
		if (strcasecmp($this->filteredText(),substr(self::$dict[$i],0, $this->strLen())) == 0){
		 array_push(self::$output,self::$dict[$i]);
		}
	}
  return self::$output;
}

}

$Firstsearch = new AutoComplete("22air22");

# echo $Firstsearch->autoWord();






?>


