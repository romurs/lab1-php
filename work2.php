<?php

print "Красный, синий и желтый называют основными цветами. Какие 2 из основных цветов вы хотите смешать?" . PHP_EOL;
$userColor1 = mb_strtolower(readline("1 цвет: "));
$userColor2 = mb_strtolower(readline("2 цвет: "));

if ($userColor1 == "красный" && $userColor2 == "жёлтый" || $userColor1 == "жёлтый" && $userColor2 == "красный") {
    print 'Оранжевый';
} elseif ($userColor1 == "красный" && $userColor2 == "синий" || $userColor1 == "синий" && $userColor2 == "красный") {
    print "Фиолетовый";
} else if ($userColor1 == "синий" && $userColor2 == "жёлтый" || $userColor1 == "жёлтый" && $userColor2 == "синий") {
    print "Зелёный";
} else {
    print $userColor1;
}