<meta charset="utf-8">
<?php
//Exemplo 1
echo "<h4>Exemplo 1</h4>";
$x = 1;// um sinal de igual é atribuição

// Condicionais if e else
if ($x == 1){// dois sinais de igual é comparação
    echo "realmente X é igual a 1 <br>";
    $x = 10;
}
if ($x > 1)
    echo "X é maior que 1 <br>";
if ($x < 1)
    echo "X é menor que 1 <br>";
if ($x >= 1)
    echo "X é maior ou igual a 1 <br>";
if ($x <= 1)
    echo "X é menor ou igual a 1 <br>";
if ($x == 1 and $x < 10){
    echo "X é igual a 1 e menor que 10 <br>";
}if ($x == 1 or $x >= 10){
    echo "X é igual a 1 ou X é maior ou igual a 10 <br>";
}
//Exemplo 3 do uso de if
echo "<h4>Exemplo 2</h4>";
$conta = 3333;
$senha = 12345;

if ($conta == 3333 and $senha == 12345)
    echo "Acessou<br>";
if ($conta == 3333 and $senha != 12345)
    echo "<br>Senha inválida<br>";
if ($conta != 3333 and $senha == 12345)
    echo "<br>Verifique o numero da conta.<br>";

//Exemplo 2 do uso de if
echo "<h4>Exemplo 3</h4>";
$y = true;

if ($y){
    echo "É verdadeiro";
}