<?php

function multi_aleatorio($a, $b,$numeros){
    $total1=0;
    for ($i=0; $i <$a ; $i++) { 
        $n = rand(0, 9);
        
        $total1= $total1.$numeros[$n];
    }
    $total2=0;
    for ($i=0; $i <$b ; $i++) { 
        $n = rand(0, 9);
        
        $total2= $total2.$numeros[$n];
    }
    echo  $total1." x ". $total2." = ";
    echo $total1 * $total2;
}

function multi_nD($num,$n1,$n2){
  echo $n1." X ".$n2." = ";  
echo $num[0]*$num[1]."<br>";
}





// digitar numeros y los guarde en un array
$num = array();
$n1=6;
$n2=8;
array_push($num, $n1,$n2);

multi_nD($num,$n1,$n2);




//con numero aleartorios tomados de un array
    $numeros = array(0,1,2,3,4,5,6,7,8,9 );
    $cifra1=2;//colocar de cuantas cifras quiere el numero
    $cifra2=2;//colocar de cuantas cifras quiere el numero
   multi_aleatorio( $cifra1, $cifra2,$numeros);


    