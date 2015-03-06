<meta charset="utf8">
<?php
    $x =  10;
    $y = 5;

#========= Operações Básicas ==========#
    echo "<strong><h3>Operações básicas</h3>";
    $sum = $x + $y;
    echo "X + Y = $sum<br>";

    $sub = $x - $y;
    echo "X - Y = $sub<br>";

    $mult = $x * $y;
    echo "X * Y = $mult<br>";

    $div = $x / $y;
    echo "X / Y = $div<br></strong>";

#========= Incremento e Decremento ========#
    echo "<strong><h3>Incremento</h3>";

    $x++;#$x = $x + 1
    echo " x++ = $x<br>";

    $x+=5;#$x = $x + 5
    echo "x+= 5 = $x<br>";

    echo "<h3>Decremento</h3>";
    $x--;#$x = $x - 1
    echo " x-- = $x<br>";

    $x-=5;#$x = $x - 5
    echo "x-= 5 = $x<br></strong>";

#========= Concatenação ========#
$pnome = "Jonison";
$snome = " Rebelatto";

echo "<strong><h3>Concatenção</h3>";

echo $pnome.$snome."<br>";

$pnome.=" Rebelatto";
echo $pnome."<br>";

echo $pnome.$x."<br>";
?>