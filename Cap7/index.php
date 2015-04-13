<!DOCTYPE HTML>
<meta charset="utf-8"/>
<?php
//Funções

/**
 * Primeira versão da função soma - Função Simples
 **/

function somaV1(){
    echo 5 + 5;
}


/**
 * Segunda versão da função soma - Função melhorada
 **/

function somaV2(){
$x = 5;
$y = 6;
echo $x + $y."<br>";
}

echo "<h3>Funções simples</h3>";
echo "<h4 style= color:dimgray>Função soma V1</h4>";
somaV1();

echo "<h4 style= color:dimgray>Função soma V2</h4>";
somaV2();

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * Variáveis Globais e Variáveis de Escopo
 *
 */
$x = 10;
function somaV3($x,$y){
    echo $x + $y;
}
=======
=======
>>>>>>> developer
 * Terceira versão da função soma - Função utilizando variáveis Globais e variáveis de Escopo
 **/

echo "<h3>Funções avançadas parte I - Variávies Globais e de Escopo</h3>";


$x = 10;//Global - Para o documento inteiro

echo "<h4 style= color:dimgray>Função soma V3</h4>";
function somaV3($x = 0,$y = 0){//váriáveis de escopo
    echo $x + $y;
}
somaV3(10);
//Formatos que podemos passar em nossos parâmetros de uma função : int, "String", false/true, null, array( )

/**
 * Função média - Função utilizando variáveis Globais e variáveis de Escopo
 **/
echo "<h3>Funções avançadas parte I - Funções com retorno</h3>";

echo "<h4 style= color:dimgray>Função média</h4>";

function media($p1,$p2,$p3,$p4){
    $resultado = ($p1 + $p2 + $p3 + $p4) / 4;
    return $resultado;
}

$media = media(8,5,7,10);

echo "<strong>Sua média é: ".$media."</strong>";
<<<<<<< HEAD
>>>>>>> developer
=======
>>>>>>> developer
?>