<?php

//Etape-1: 
//Voici un array de 8 valeur, pour chaque valeur revoyer:
//LETS si la valeur est divisible uniquement par 3
//EAT si la valeur est divisible uniquement par 5
//LETSEAT si la valeur est divisible par 3 et 5
//La valeur initial si la valeur n'est divisible par 3 et 5
echo "<h2> Etape1 </h2>";

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

///Etape-2: Pour la chaine de caractere suivantes

echo "<h2> Etape2 </h2>";

$S = "ABCDEF123456789";

$array = str_split($S);


for($i=0; $i < count($array) ; $i=$i+2){
    echo $array[$i] . "</br>";
    
}





///Etape-3:
// Pour la chaine de caractere suivantes verifier si il y a plus de 8 caractere 
// Si il y a une majuscule, une minuscule et un chiffre
// Retourner une erreur

echo "<h2> Etape3 </h2>";

$S= "kA9kzejh2";

function test($array){

    if(strlen($array) > 8){
        if(preg_match("#[A-Z ]#",$array)){
            if(preg_match("#[a-z ]#",$array)){
                if(preg_match("#[1-9 ]#",$array)){
                    
                    $result = "Bien joué </br>";
                    
                
                }else{
                    $result = "Il faut un chiffre </br>";
                  
                }
            }else{
                $result = "Il faut une minuscule </br>";
              
            }
        }else{
            $result = "Il faut une majuscule </br>";
          
        }
    
    }else{
        $result = "Il faut une plus de 8 caracteres </br>";
      
    }

    return $result;
}

$resultat = test($S);

echo $resultat;