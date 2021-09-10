<?php


$a = 4;
for ($b =$a; $b>0; $b--){
    for ($c=$a; $c>=$b; $c--) {
        echo "*";
    }
    echo "<br>";
}


for ($b =0; $b<5; $b++){
    for ($c=5; $c> $b; $c--) {
        echo "-";
    }
    for ($i = 0; $i <= $b; $i++){
        echo "*";
    }
    echo "<br>";
}

?>