<?php
# Надо создать таблицу умножения которая принимает 2 числа
# Создаём массив
# и делаем цикл для создания строчки и пушим в конец нашего массива пустой массив что бы обработать каждый столбик 
# и внутри цикла делаем цикл для создания столбиков и пушим тоже в конец нашего массива до того пока не кончиться вторая переменная
# и там же умножаем эти два числа и возращаем полученный массив 
#
/*
Create a function that accepts dimensions, of Rows x Columns, as parameters in order to create a multiplication table sized according to the given dimensions. **The return value of the function must be an array, and the numbers must be Fixnums, NOT strings.
Example:
multiplication_table(3,3)
1 2 3
2 4 6
3 6 9
-->[[1,2,3],[2,4,6],[3,6,9]]
Each value on the table should be equal to the value of multiplying the number in its first row times the number in its first column.
*/

function multitable($row, $col) {
	$table = [];
	for ($i = 0; $i < $row; $i++) {
		array_push($table,[]);
		for ($a = 0; $a < $col; $a++) {
			$f = $a + 1;
			$g = $i + 1;
		array_push($table[$i], $f * $g);
		}
	}
	return $table;
}

print_r(multitable(5,5));
?>

