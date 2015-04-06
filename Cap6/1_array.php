<meta charset="UTF-8"/>
<?php
#####################
##  Arrays Simples ##
#####################

$x[0][0] = "Oi";
$x[0][1] = "Posição 1";


//echo $x[0][0];

$animais = array("Gato","Cachorro","Coelho");// índices são implícitos - automáticos

//echo $animais[$i];

$nomes = array(0=>"Pedro",1=>"Wesley",2=>"Mariana",3=>"Raffy", 4=>"Carlos", 5=>"Ana Carla", 6=>"Gessica");// índices são explicitos - manuais

//echo $nomes[3];

$nomes2 = array(
    0=>array(
        0=>"Pedrão",
        1=>"Rebelatto"),
    1=>"Posição");

//echo $nomes2[0][1];

//print_r($nomes2);

###########################
##  Arrays associativos  ##
###########################

$config = array();//declaração de arrray
$config["nome"] = "Fenix Tecnologia e Inovação";
$config["linguagem"] = "PHP";
$config["site"] = "http://www.fenixti.com.br";

//echo $config["nome"]." - ".$config["site"];

$exemplo = array(
                  "nome" => "Fenix Tecnologia e Inovação",
                  "email" => "contato@fenixti.com.br",
                  "site" => "http://www.fenixti.com.br",
                  "ativo" => true,
                  "valor" => 100
                );
//echo $exemplo["nome"];

//var_dump($exemplo);

$tam = count($nomes);

for ($i = 0; $i < $tam; $i++)
    echo $nomes[$i]."<br>";

?>