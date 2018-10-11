<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-1_lesson-2_homework</title>
</head>
<body>
<div style="background-color: #fbfbfb">

    <h2>Task-1</h2>

    <?php

    $a = -5;
    $b = 10;
    if ($a > 0 & $b > 0) {
        $c = $a - $b;
        echo "$c";
    } else
        if ($a < 0 & $b < 0) {
            $c = $a * $b;
            echo "$c";
        } else
            if ($a > 0 & $b < 0 || $a < 0 & $b > 0) {
                $c = $a + $b;
                echo "$c";
            }
    ?>

    <h2>Task-2</h2>

    <?php
    $a = 5;
    switch ($a) {
        case '0':
            echo "0 ";
        case '1':
            echo '1 ';
        case '2':
            echo '2 ';
        case '3':
            echo '3 ';
        case '4':
            echo '4 ';
        case '5':
            echo '5 ';
        case '6':
            echo '6 ';
        case '7':
            echo '7 ';
        case '8':
            echo '8 ';
        case '9':
            echo '9 ';
        case '10':
            echo '10 ';
        case '11':
            echo '11 ';
        case '12':
            echo '12 ';
        case '13':
            echo '13 ';
        case '14':
            echo '14 ';
        case '15':
            echo '15 ';
            break;
    }

    ?>

    <h2>Task-3</h2>

    <?php
    function sum($a, $b)
    {
        $c = $a + $b;
        echo "<p>$c</p>";
        return $c;
    }

    sum(5, 5);

    function reduce($a, $b)
    {
        $c = $a - $b;
        echo "<p>$c</p>";
        return $c;
    }

    reduce(5, 5);

    function multiply($a, $b)
    {
        $c = $a * $b;
        echo "<p>$c</p>";
        return $c;
    }

    multiply(5, 5);

    function divide($a, $b)
    {
        $c = $a / $b;
        echo "<p>$c</p>";
        return $c;
    }

    divide(5, 5);

    ?>

    <h2>Task-4</h2>

    <?php

    function mathOperation($arg1, $arg2, $operation)
    {
        switch ($operation) {
            case 'sum':
                echo 'sum';
                break;
            case 'reduce':
                echo 'reduce';
                break;
            case 'multiply':
                echo 'multiply';
                break;
            case 'divide':
                echo 'divide';
                break;
        }
    }

    mathOperation(5, 10, sum($a, $b));
    mathOperation(5, 10, reduce($a, $b));
    mathOperation(5, 10, multiply($a, $b));
    mathOperation(5, 10, divide($a, $b));

    ?>

</div>

<div style="background-color: gray; height: 60px; color: #fff; display: flex; align-items: center; justify-content: center;">
    <p><?php echo date("Y"); ?></p>
</div>

</body>
</html>


