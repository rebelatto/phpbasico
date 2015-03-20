<meta charset="utf-8"/>

<?php

//Condicionais elseif

//Exemplo 1
echo "<h4>Exemplo 1</h4>";

$login = "admin";
$senha = 1234;

if ($login == "admin" and $senha == 1234){
    echo "Seja Bem Vindo $login!";
}
elseif ($login == "admin" and $senha != 1234){
    echo "Senha Inválida";
}
else{
    echo "Erro no login";
}