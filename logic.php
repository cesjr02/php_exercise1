<?php

date_default_timezone_set('America/Chicago');

$time_of_day = date('g:ia');

$time = date('H');

//$time = 10;

if ($time >= 07 && $time < 17) {
	$image = 'day.jpg';
}
elseif ($time >= 17 && $time < 21) {
	$image = 'dusk-dawn.jpg';
}
elseif ($time >= 05 && $time < 07) {
	$image = 'dusk-dawn.jpg';
}
else {
	$image = 'night.jpg';
}


?>