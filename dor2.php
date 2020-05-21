<?php

set_time_limit(2400);
ini_set('session.gc_maxlifetime', 2400);

$fd = fopen("keys.txt", 'r');
$zn = file_get_contents('id_keys'); $znn=$zn;
	while ($zn>0) {    
	$vremen=fgets($fd);
	$zn=$zn-1; }
$key=fgets($fd); $znn=$znn+1;

$fdd = fopen("id_keys", 'w'); fwrite($fdd, $znn); fclose($fdd);

$key2=fgets($fd);
$key3=fgets($fd);
$key4=fgets($fd);
$key5=fgets($fd);
$key6=fgets($fd);


fclose($fd);

?>
