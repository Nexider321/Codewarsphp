<?php
# Создать исходный массив
# создать пустой массив
# выставить приоритеты O = 1 A = 2 W = 3 H = 4
# Разделить массив и каждую букву закидывать в 1 2 3 или 4 один массив
# и вывести массив по порядку 1 2 3 4
# если в массиве ничего нету то ничего не возращать 


/*
Don't Drink the Water
Given a two-dimensional array representation of a glass of mixed liquids, sort the array such that the liquids appear in the glass based on their density. (Lower density floats to the top) The width of the glass will not change from top to bottom.
======================
|   Density Chart    |
======================
| Honey   | H | 1.36 |
| Water   | W | 1.00 |
| Alcohol | A | 0.87 |
| Oil     | O | 0.80 |
----------------------
[                            [
 ['H', 'H', 'W', 'O'],        ['O','O','O','O']
 ['W', 'W', 'O', 'W'],  =>    ['W','W','W','W']
 ['H', 'H', 'O', 'O']         ['H','H','H','H']
 ]                           ]
The glass representation may be larger or smaller. If a liquid doesn't fill a row, it floats to the top and to the left.
 */

function sortFunc(){
	$mixedGlass = [
	[
		'H', 'H', 'W', 'O'
	],
	[
		'W', 'W', 'O', 'W'
	],
	[
		'H', 'H', 'O', 'O'
	]
];

$O = [];
$A = [];
$W = [];
$H = [];

foreach ($mixedGlass as $mixed) {

	$exploded = implode(",", $mixed);
	$ixploded = explode(",", $exploded);

	foreach ($ixploded as $ploded) {
 	for ($i = 0; $i < strlen($ploded); $i++){
		switch ($ploded[$i]) {
		case 'H':
			array_push($H, $ploded[$i]);
			break;
		case 'O':
			array_push($O, $ploded[$i]);
			break;
		case 'A':
			array_push($A, $ploded[$i]);
			break;
		case 'W':
			array_push($W, $ploded[$i]);
			break;
		 default:
			echo "not";
			break;
		}
	}
    }

}
	var_dump($O);
	var_dump($A);
	var_dump($H);
	var_dump($W);
  

}

sortFunc();
?>
