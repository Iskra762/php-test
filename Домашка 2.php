<?php
// Создать по одной переменой с типами string, integer, float, boolean, null, array, (вывести информацыю о них с помощью var_dump и gettype)


$a = 5;
$a = (string)$a;
echo gettype($a) . "<br>";
echo var_dump($a). "<br>";

$a = (integer)$a;
echo gettype($a). "<br>";
echo var_dump($a). "<br>";

$a = (float)$a;
echo gettype($a) . "<br>";
echo var_dump($a) . "<br>";

$a = (boolean)$a;
echo gettype($a) . "<br>";
echo var_dump($a) . "<br>";

$a = (array)$a;
echo gettype($a) . "<br>";
echo var_dump($a) . "<br>";

$b = 7;
$b = (null) . $b;
echo gettype($b) . "<br>";
echo var_dump($b) . "<br>";


