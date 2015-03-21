<?php
//Condicionais if e else de forma contraída
$login = "admin";

//forma comum de if e else
/*if($login == "admin")
    $resultado = true;
else
    $resultado = false;
*/

//forma contraida
/*$resultado = $login=="admin"?$x = true:$x = false;
echo "Estou logado? <br> R: ".$resultado;*/


//forma mais contraida
$login?$x = true: $x = false;
echo "<br>Existe login?<br> R: ".$x;