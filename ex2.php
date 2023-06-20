<?php

$x = '-';
$c=0;
for($i=0;$i<10;$i++){
    while($c<10){
        echo $x;
        $c++;
    }
    echo "<br>";
    $c=0;
}

$x = '-';
$c=0;
for($i=0;$i<10;$i++){
    while($c<$i){
        echo $x;
        $c++;
    }
    echo "<br>";
    $c=0;
}