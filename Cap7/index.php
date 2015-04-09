<!DOCTYPE HTML>
<meta charset="utf-8"/>
<?php
//Funções

/**
 * Primeira versão da função
 * */

function somaV1(){
    echo 5 + 5;
}


/**
 * Função um pouco melhorada
 * */

function somaV2(){
$x = 5;
$y = 6;
echo $x + $y."<br>";
}


echo "<h3>Função soma V1</h3>";
somaV1();

echo "<h3>Função soma V2</h3>";
somaV2();

/**
 * Variáveis Globais e Variáveis de Escopo
 *
 */
$x = 10;
function somaV3($x,$y){
    echo $x + $y;
}
?>