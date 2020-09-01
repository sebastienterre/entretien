<?php

//Etape-1: Voici un array de 8 valeur, pour chaque valeur revoyer:
//LETS si la valeur est divisible uniquement par 3
//EAT si la valeur est divisible uniquement par 5
//LETSEAT si la valeur est divisible par 3 et 5
//La valeur initial si la valeur n'est divisible par 3 et 5

$array = array("6", "10", "15", "38","30000", "19685", "6022", "6756");

function Fizzbuzz($array){

    for ($i = 0;$i <= count($array); $i++) {
            if(!empty($array[$i])){
                

                if (is_int($array[$i] / 3) AND !is_int($array[$i] / 5) ){
                    echo "LETS </br>";
                }
                elseif (is_int($array[$i] / 5) AND !is_int($array[$i] / 3) ){
                    echo "EAT </br>";
                }
                elseif (is_int($array[$i] / 3) AND is_int($array[$i] / 5) ){
                    echo "LETSEAT </br>";
                }else{
                    echo $array[$i] . "</br>";
                }
                


            }
 
    }
}

Fizzbuzz($array);

///Etape-2:

///Etape-3: