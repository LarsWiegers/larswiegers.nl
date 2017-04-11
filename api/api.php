<?php
$buttonFile = "button.txt";
$rotaryFile = "rotary.txt";
$dataFile = fopen($buttonFile, "a+");
fwrite($dataFile,$_GET["button"]);
fclose($dataFile);
$dataFile = fopen($buttonFile, "r");
echo substr(file_get_contents($buttonFile), -1);
echo ",";
$dataFile = fopen($rotaryFile, "a+");
fwrite($dataFile,$_GET["rotary"]);
fclose($dataFile);
$dataFile = fopen($rotaryFile, "r");
echo substr(file_get_contents($rotaryFile), -5);
fclose($dataFile);
?>