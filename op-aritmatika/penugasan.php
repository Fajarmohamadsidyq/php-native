<?php

    $uang = 200000;
    echo "Uang ucup : <b>$uang</b> <hr>";

    //jajan minum
    echo "Jajan minum <b> 15000 </b> <br>";
    $uang -= 15000;
    echo "Sisa uang ucup <b>$uang</b> <hr>";

    //beli soso
    echo "Beli sosis bakar seharga <b>25000</b> <br>";
    $uang -= 25000;
    echo "Sisa uang ucup <b>$uang</b> <hr>";

    //sedekah 
    $uangsedekah = 10;
    $uangsedekah /= 100;
    $uangsedekah *= $uang;

    echo "Bersedekah ke musafir 10% dari <b>$uang</b> yaitu sebesar <b>$uangsedekah</b> <br>";
    $uang -= $uangsedekah;
    echo "Sisa uang ucup <b>$uang</b> <hr>";

    //nemu uang
    $uangnemu = 50;
    $uangnemu /= 100;
    $uangnemu *= $uang;

    echo "Nemu uang di jalan 50% dari sisa uang ucup <b>$uang</b> yaitu sebesar <b>$uangnemu</b> <br>
    Sisa uang ucup sekarang <b>$uangnemu</b> + <b>$uang</b> <hr>";

    // total uang ucup
    $uang += $uangnemu;
    echo "Total uang ucup sekarang adalah <b>$uang</b>";
  
?>