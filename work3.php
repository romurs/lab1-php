<?php

print "Введите координаты отрезков" . PHP_EOL;
$a1 = mb_strtolower(readline("Координаты a1: "));
$b1 = mb_strtolower(readline("Координаты b1: "));
$a2 = mb_strtolower(readline("Координаты a2: "));
$b2 = mb_strtolower(readline("Координаты b2: "));


if ($a1 > $b1) {
    $temp = $a1;
    $a1 = $b1;
    $b1 = $temp;
}

if ($a2 > $b2) {
    $temp = $a2;
    $a2 = $b2;
    $b2 = $temp;
}

$maxA = max($a1, $a2);
$minB = min($b1, $b2);

if ($maxA > $minB) {
    print 'Пересечений нет';
} elseif ($maxA === $minB) {
    print 'Пересечение в точке ' . $maxA;
} else {
    print 'Пересечение отрезков [' . $maxA . ';' . $minB . ']';
}
