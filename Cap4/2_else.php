<meta charset="utf-8">
<?php
//Condicionais else

//Exemplo 1
echo "<h4> Exemplo 1</h4>";
$x = 1;

if ($x == 1){
    echo "X é igual a 1 <br>";
}
else
    echo "X é diferente de 1 <br>";

//Exemplo 2
echo "<h4> Exemplo 2</h4>";
$login = "admin";
$senha = 123;

if ($login == "admin" and $senha == 123)
    echo "Logado no sistema!";
else
    echo "Usuário ou senha inválidos";
