<?php

date_default_timezone_set('America/Chicago');


$time = date('H');

//$time = 20;

if ($time >= 07 && $time < 18) {
	echo '<img src="images/day.jpg"';
}
elseif ($time >= 18 && $time < 20) {
	echo '<img src="images/dusk-dawn.jpg"';
}
elseif ($time >= 06 && $time < 07) {
	echo '<img src="images/dusk-dawn.jpg"';
}
else {
	echo '<img src="images/night.jpg"';
}



?>