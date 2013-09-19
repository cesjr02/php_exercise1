<?php

date_default_timezone_set('America/Chicago');


$time = date('H');

//$time = 10;

if ($time >= 07 && $time < 17) {
	echo '<img src="images/day.jpg"';
}
elseif ($time >= 17 && $time < 21) {
	echo '<img src="images/dusk-dawn.jpg"';
}
elseif ($time >= 05 && $time < 07) {
	echo '<img src="images/dusk-dawn.jpg"';
}
else {
	echo '<img src="images/night.jpg"';
}



?>