<?php
# Если алекс получит 10 и больше, вернуть строку ...
#
# Если алекс не получит 10 и меньше, вернуть строку ...


function hoop($a) {
	if ($a >= 10) {
		return "Great";
	}
	else{
	return "bad";
	}
}
echo hoop(22);

?>
