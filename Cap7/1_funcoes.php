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
 * Variáveis Globais e Variáveis de Escopo
 *
 */
echo "<h3>Funções avançadas parte I - Variávies Globais e de Escopo</h3>";


$x = 10;//Global - Para o documento inteiro

echo "<h4 style= color:dimgray>Função soma V3</h4>";

function somaV3($x = 0,$y = 0){//váriáveis de escopo
    echo $x + $y;
}
somaV3(10);
//Formatos que podemos passar em nossos parâmetros de uma função : int, "String", false/true, null, array( )

/**
 * Função média - Funções utilizando retorno
 **/

echo "<h3>Funções avançadas parte I - Funções com retorno</h3>";

echo "<h4 style= color:dimgray>Função média - Simples</h4>";

function media($p1,$p2,$p3,$p4){
    $resultado = ($p1 + $p2 + $p3 + $p4) / 4;
    return $resultado;
}

$media = media(8,5,7,10);

echo "<strong>Sua média é: ".$media."</strong>";

echo "<h4 style= color:dimgray>Função média - Utilizando Array</h4>";

$alunos[0]["nome"] = "Pedrinho";
$alunos[0]["media"] = media(5,6,8,9);

$alunos[1]["nome"] = "Márcia";
$alunos[1]["media"] = media(8,7,8,9);

$alunos[2]["nome"] = "Antônio";
$alunos[2]["media"] = media(9,7,10,9);

$alunos[3]["nome"] = "Jéssica";
$alunos[3]["media"] = media(3,8,7,6);

$tam = count($alunos);

for ($i = 0; $i < $tam; $i++){
    echo "<strong>Nome do Aluno: </strong><em>".$alunos[$i]["nome"]."</em><br>";
    if ($alunos[$i]["media"] >= 7)
        echo "<strong>Média Final: </strong><em><spam style = color:#3b00ff>" .$alunos[$i]["media"]."</spam></em><br><br>";
    else
        echo "<strong>Média Final: </strong><em><spam style = color:#ff0024>" .$alunos[$i]["media"]."</spam></em><br><br>";
}

?>