
<meta charset="utf-8"/>

<h3>While Comum </h3>

<?php

    $i = 0;
    while($i <=10){
        echo $i."<br>";
        $i ++;
    }
$i = 1;
?>


<h3>While Contraído</h3>
<?php while($i <= 10):?>

Esse é o valor de $i: <?=$i?><?php $i++;?> <br>

<?php endwhile;?>