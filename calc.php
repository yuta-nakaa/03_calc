<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

switch ($operator){
    case 'addition':
            $add = $num1 + $num2;
            echo " {$num1} + {$num2} = {$add} ";
        break;
    case 'subtraction':
            $sub = $num1 - $num2;
            echo " {$num1} - {$num2} = {$sub} ";
        break;
    case 'multiplication':
            $mul = $num1 * $num2;
            echo " {$num1} × {$num2} = {$sub} ";
        break;
    case 'division':
            $div = $num1 / $num2;
            echo " {$num1} ÷ {$num2} = {$div} ";
        break;
    default:
        echo '正しい演算子を指定してください';
    break;
}