<?php

    $JTama = 1;
    $JToni = 0.5;
    $JTinitama = 14;
    $Jtinitoni = 34;

    echo "Umur Tama = $JTama X<br>";
    echo "Umur Toni = $JToni X<br>";
    echo "Umur Toni + Umur Tini = $Jtinitoni<br>";
    echo "$JToni + $JTama X - $JTinitama = $Jtinitoni<br>";
    $x = $JTama + $JToni;
    $y = $JTinitama + $Jtinitoni;
    $z = $y/$x;
    echo "$x X=$JTinitama+$Jtinitoni=$y<br>";
    echo "$x X = $y<br>";
    echo "X = $y : $x=$z<br>";
    echo "Umur Tama = $z<br>";
    $tini = $z-$JTinitama;
    echo "Umur Tini = $tini<br>";
    $toni = $z/2;
    echo "Umur Toni = $toni";
?>