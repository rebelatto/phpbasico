<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laço de repetiçao - For</title>
    </head>

<body>

<h1 style="text-align:center">Laço de Repetição - For</h1>
<!--Exemplo 1 - Laço de repetição -->
<h3>Exemplo 1</h3>
<?php
for($i=0;$i < 10; $i++){
    $cont = $i + 1;
    echo "Entrou no laço de repetição $cont vez e a variável i = $i</br>";
}
?>


<!--Exemplo 2 - Laço de repetição  -->
<h3>Exemplo 2</h3>
<ul>
    <?php
        for($i=0;$i < 5;$i++)
        echo '<li><a href="#'.$i.'">Home</a>';
    ?>
</ul>


<!--Exemplo 3 - Laço de repetição -->
<h3>Exemplo 3</h3>
<ul>
    <?php for($i=0;$i < 5;$i++):?>
        <li><a href="#<?=$i;?>">Home</a>
    <?php endfor;?>
</ul>

</body>
</html>