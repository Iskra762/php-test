<?php
    //String - строка
$name = "Bodia";
$name2 = "Богдан";
echo gettype($name) . "<br>"; // gettype визначає тип даних тег <br> перенести на наступний рядок
echo is_string($name), "<br>"; //  якщо це рядок PHP повертає значення - 1 (true), '' (fфlse)
$age = 3;
// var_dump() - виводить інформацію про змінну

echo var_dump($name) .  "<br>";
echo var_dump($name2) .  "<br>";
if (is_string($name)) echo "$name - це рядок <br>"; // якщо is_string($name) = рядку то він виводить таке значення "Bodia - це рядок"

$num = 33; // INTETGER - ціле число
echo PHP_INT_MAX, "<br>"; // PHP_INT_MAX - максимальне значення цілого числа
echo PHP_INT_MIN, "<br>"; // PHP_INT_MIN - мінімальне значення цілого числа
$num1 = 0b1010; // 0b - двійкова система числення
$num2 = 012; // 0 - вісімкова система числення
$num3 = 0xA; // 0x - шістнадцяткова система числення
//$num = 1.5; // FLOAT - дробове число
//$num = 1.5e4; // 1.5 * 10^4

echo $num2, "<br>";

echo gettype($num), "<br>";
echo var_dump($num), "<br>";
echo is_int($num), "<br>"; // якщо значення правильне то виводить 1 (true), якщо неправильне то виводить '' (false)

$a = 3.5 ; // float - дробове число
$b = 5e-2 ; // float рівне 5 * 10^2 = 500 
$c = 1.5e4 ; // float рівне 1.5 * 10^4 = 15000
echo "a = $a, b = $b, c = $c <br>";
if (is_float($a)) echo "3.5 - дійсне число  <br>";   //is_float() є функцією мови програмування PHP, яка перевіряє, чи є задана змінна дійсним числом (число з плаваючою комою).


    // BOLEAN -Логічний тип даних, має два значення true, false
$rain = true;
$snow = false;
echo "rain = $rain, snow = $snow <br>";
is_bool($rain); // is_bool() функцція яка перевіряє, чи є задана змінна логічним типом даних (true або false
echo gettype($rain), "<br>";  // gettype() - визначає тип даних
echo var_dump($snow), "<br>"; // var_dump() - виводить інформацію про змінну  

$var = null; // NULL - значення відсутнє
echo is_null($var), "<br>"; // is_null() - перевіряє, чи є задана змінна значенням NULL
echo gettype($var), "<br>"; // gettype() - визначає тип даних
echo var_dump($var), "<br>"; // var_dump() - виводить інформацію про змінну

    // Array - масив
$colors = array("red", "green", "blue"); // array() - створює масив
echo $colors[0], "<br>"; // виводить перший елемент масиву
echo $colors[1], "<br>"; // виводить другий елемент масиву
echo $colors[2], "<br>"; // виводить третій елемент масиву
echo var_dump($colors), "<br>"; // var_dump() - виводить інформацію про змінну
echo gettype($colors), "<br>"; // gettype() - визначає тип даних
echo is_array($colors), "<br>"; // is_array() - перевіряє, чи є задана змінна масивом
echo count($colors), "<br>"; // count() - повертає кількість елементів масиву
    $asoc_name = array("name" => "Bodia", "age" => 18, "city" => "Lytsk"); // асоціативний масив
    echo $asoc_name["name"], "<br>"; // виводить значення name
    echo $asoc_name["age"], "<br>"; // виводить значення age
    echo $asoc_name["city"], "<br>"; // виводить значення city
print_r($asoc_name); // print_r() - покаже код масиву на екрані
is_array($asoc_name); // is_array() - перевіряє, чи є задана змінна масивом

    // RESOURSE - ресурс (посилання на зовнішній ресурс)
$file = fopen("урок 2.php", "r"); // fopen() - відкриває файл, "r" - читання
echo is_resource($file), "<br>"; // is_resource() - перевіряє, чи є задана змінна ресурсом

    //Object - об'єкт



    //Неявне приведеня типу
$a = 5;
echo gettype($a), "<br>"; // gettype() - визначає тип даних integer
$a = $a*1.5; // виведезначення 7.5 "double" - дробове число
echo gettype($a). "$a <br>";
$a = $a."string";
echo gettype($a). "<br>";
echo "3.14 пи"*2 . "<br>"; // виведе 6.28 // буде рахувати тільки числа після закінчення обрахунку напише результат і вибє помилку якщо включено режим E_STRICT 


    //примусове приведення типу
    $b = 3;
    $b = (string)$b; // приведення до типу string
    echo gettype($b). "<br>"; // gettype() - визначає тип даних

    $b = (float) $b; // приведення до типу float/double
    echo gettype($b). "<br>"; // gettype() - визначає тип даних

    $b = (bool) $b; // приведення до типу bool
    echo gettype($b). "<br>";
    echo $b. "<br>";

    $c = "33";
    $c = (int) $c; // приведення до типу int
    echo gettype($c). "<br>"; 

    $c = (array) $c; // приведення до типу array
    echo gettype($c). "<br>";
    print_r($c); // print_r() - покаже код масиву на екрані
?>


