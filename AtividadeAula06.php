<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if($num2 == 0)
{
    echo('Não é possível dividir por zero.'.'<br>');
}
else
{
    $divisao = $num1/$num2;
    echo ("O valor da divisão é: $divisao".'<br>');
}

$multi = $num1*$num2;
echo ("O valor da multiplicação é: $multi".'<br>');

$soma = $num1+$num2;
echo ("O valor da soma é: $soma".'<br>');

$sub = $num1-$num2;
echo ("O valor da subtração é: $sub".'<br>');

