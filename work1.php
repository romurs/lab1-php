<?php

$userNum1 = readline("Введите 1-ое число: ");
$userFn = readline("Введите математическую операцию: ");
$userNum2 = readline("Введите 2-ое число: ");



switch($userFn){
    case "+":
        print $userNum1 + $userNum2;
        break;

    case "-":
        print $userNum1 - $userNum2;
        break;

    case "*":
        print $userNum1 * $userNum2;
        break;

    case "/":
        if ($userNum2 === 0){
            print 'На 0 делить нельзя';
        }
        else{
            print $userNum1 / $userNum2;
        }
        break;

    default:
        print "Вы ввели не правильно";
}

