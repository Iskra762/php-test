<?php
// file_put_contents(); // запис файлів пише дані в файл
// file_get_contents(); // читає дані з файлу
// file(); // читає дані з файлу і записує в масив
// $file = fopen("урок 2.php", "r"); // fopen() - відкриває файл, "r" - читання
?>

<!DOCTYPE html>
<html> <lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Запис файлів </title>
</head>
<body>

    <?php
    $hompeg = file_get_contents('text.txt');
    $hompeg .= "\n\t\t\t ще один рядок";
    $date = date('d.m.Y H:i:s');
    file_put_contents('text.txt', $hompeg . $date);
    ?>
</body>
</html>