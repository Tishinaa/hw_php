<?php

// 1 задание
$a = 5;
$b = 10;
if ($a >=0 && $b >= 0) {
    echo 'Разность чисел равна: '.($a - $b);
} elseif ($a < 0 && $b < 0) {
    echo 'Произведение чисел равно: '.($a * $b);
} elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo 'Сумма чисел равна: '.($a + $b);
}
// 2 задание

$i = rand(0, 15);

switch ($i) {
    case 0:
        echo "0<br>";
    case 1:
        echo "1<br>";
    case 2:
        echo "2<br>";
    case 3:
        echo "3<br>";
    case 4:
        echo "4<br>";
    case 5:
        echo "5<br>";
    case 6:
        echo "6<br>";
    case 7:
        echo "7<br>";
    case 8:
        echo "8<br>";
    case 9:
        echo "9<br>";
    case 10:
        echo "10<br>";
    case 11:
        echo "11<br>";
    case 12:
        echo "12<br>";
    case 13:
        echo "13<br>";
    case 14:
        echo "14<br>";
    case 15:
        echo "15<br>";
}

// рекурсия

$a = rand(0, 15);

iteration($a);


function iteration($number)
{

    if ($number >= 15) return;

    switch ($number) {
        case(1):
            $number++;;
            break;
        case(2):
            $number++;;
            break;
        case(3):
            $number++;;
            break;
        case(4):
            $number++;;
            break;
        case(5):
            $number++;;
            break;
        case(6):
            $number++;;
            break;
        case(7):
            $number++;;
            break;
        case(8):
            $number++;;
            break;
        case(9):
            $number++;;
            break;
        case(10):
            $number++;;
            break;
        case(11):
            $number++;;
            break;
        case(12):
            $number++;;
            break;
        case(13):
            $number++;;
            break;
        case(14):
            $number++;;
            break;
        case(15):
            $number++;;
            break;
        default:
            $number++;
            break;
        // repeat fifteen times
    }


    echo $number . '<br>';
    iteration($number);
}

// 3 задание
function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return ($b === 0) ? "invalid b value (=0)" : $a / $b;
}

// 4 задание
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "sum":
            return $arg1 + $arg2;
        case "sub":
            return $arg1 - $arg2;
        case "mult":
            return $arg1 * $arg2;
        case "div":
            if ($arg2 === 0) {
                echo "invalid arg2 value (=0)";
                break;
            }
            return $arg1 / $arg2;
    }
}
echo mathOperation(10, 5,div);

// 5 задание отдельно в папке homework

// 6 задание
function power($val, $pow) {
    return ($pow == 1) ? $val : $val * power($val, $pow - 1);
}
echo power(5, 3);

// 7 задание

function myTime($hour, $minute)
{
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа";
            break;
        default:
            echo "$hour часов";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 20;
    switch ($resultm) {
        case 1:
            return "$minute минута";
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
        default:
            return "$minute минут";
    }
}

$hour = rand(0, 24);
$minute = rand(0, 59);
echo myTime($hour, $minute);
