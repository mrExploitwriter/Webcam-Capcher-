<?php

$data = $_POST["data"];
$time = time();
$file = fopen("$time.txt", "w");
fwrite($file, $data);
fclose($file);

?>