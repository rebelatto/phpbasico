<?php
#####################
##  Arrays Simples ##
#####################

$x[0][0] = "Oi";
$x[0][1] = "Posição 1";


//echo $x[0][0];

$animais = array("Gato","Cachorro","Coelho");// índices são implícitos - automáticos

//echo $animais[$i];

$nomes = array(0=>"Pedro",1=>"Wesley",2=>"Mariana",3=>"Raffy");// índices são explicitos - manuais

//echo $nomes[3];

$nomes2 = array(
    0=>array(
        0=>"Pedrão",
        1=>"Rebelatto"),
    1=>"Posição");

//echo $nomes2[0][1];

###########################
##  Arrays associativos  ##
###########################

$config = array();//declaração de arrray
echo $config;
?>