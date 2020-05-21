<?php
$ad = fopen("db.txt", 'r') or die("2222222222222222222222222222221");
while ($buffer = fgets($ad)) { $buffer=trim($buffer); if ($buffer=$vid) {$returned='';} }
fclose($ad);

#."\r\n"


$rfo = fopen('db.txt', 'a') or die("не удалось создать файл");
fwrite($rfo, $vid."\r\n"); fclose($rfo);




?>
