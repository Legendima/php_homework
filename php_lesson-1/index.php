<?php

$title = 'Test: ' . date('d M o H:i:s');
$head = "HomeWork: PHP_lesson-1_task-4";
$date = date('l jS \of F Y');
$time = date('H:i:s');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body style="margin: 50px;">
<h1 style="color: limegreen; text-align: center;"><?= $head ?></h1>
<h2>Текущая дата: <span style="color: blue;"><?= $date ?></span></h2>
<h3>Время последнего обновления страницы: <span style="color: blue;"><?= $time ?></span></h3>

<h3 style="color: limegreen; text-align: center;">Task №3</h3>

<p>
    $a = 5;<br>
    $b = '05';<br>
    var_dump($a == $b);         // Почему true? - не строгое сравнение, поэтому сравниваются только значения. А интерпритатор неявно приводит строку к числу 5.<br>
    var_dump((int)'012345');     // Почему 12345? - int приводит значение к целому числу, поэтому строка 012345 будет равна числу 12345.<br>
    var_dump((float)123.0 === (int)123.0); // Почему false? - разные типы данных, а так как сравнение строгое - будет false.<br>
    var_dump((int)0 === (int)'hello, world'); // Почему true? - Если строка пустая или первый символ строки не является цифрой, знаком + или -, она преобразуется в 0.
</p><br>

<h3 style="color: limegreen; text-align: center;">Task №5</h3>


<?php

$a = 50;
$b = 3;
?>

<p style="color: blue;"><?= "a = $a;"; ?></p>

<p style="color: blue;"><?= "b = $b;"; ?></p>

<?php $a += $b; ?>

<p style="color: blue;"><?= "b = " . $b = $a - $b . ';'; ?></p>

<p style="color: blue;"><?= "a = " . $a = $a - $b . ';'; ?></p><br>

<h3>Решение</h3>

<p>
    a = a + b;<br>
    b = a - b;<br>
    a = a - b.
</p>

</body>
</html>
