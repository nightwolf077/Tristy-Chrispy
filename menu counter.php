<?php
    $fruits = 2.25;
    $greek = 1.99;
    $caesar = 1.75;
    $arabic = 0.99;
    $hotch = 0.99;
    $tea = 0.99; 
    $coffee = 0.99;
    $mojito = 1.50;
    $cola = 0.50;
    $children = 1.99;
    $resgular = 2.99;
    $super = 3.99;
    $triple = 4.99;
    $family = 6.99;
    $donut = 1.25;
    $waffle = 1.50;
    $crepe = 1.50;
    $icecream = 0.99;
    $total = $_POST['total'];
    $res = ($fruits*$n1 ) + ($greek*$n2 ) + ($caesar*$n3 ) + ($arabic*$n4 ) + ($hotch*$n5 ) + ($tea*$n6 ) 
    + ($coffee*$n7 ) + ($mojito*$n8 ) + ($cola*$n9 ) + ($children*$n10 ) + ($resgular*$n11 ) + ($super*$n12 ) 
    + ($triple*$n13 ) + ($family*$n14 ) + ($donut*$n15 ) + ($waffle*$n16) + ($crepe*$n17 ) + ($icecreame*$n18 ) ;
    $total= $res;
    print($total);

    
    
?>