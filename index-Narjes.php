<?php
    //Etape1 déclaration des variables
    $tabs = [6,10,15,38,30000,19685,6022,6756];

    //Etape2 déclaration des variables
    $chaine = "ABCDEF1234567910";
    $tabchaine = str_split($chaine);
    $length = sizeof($tabchaine);

    //Etape3 déclaration des variables
    $mot = "kA9kzejh2";


    //Etape1
    foreach($tabs as $tab){
        if (is_int($tab/3)){
            echo("LETS");
        }elseif (is_int($tab/5)){
            echo("EAT");
        }elseif (is_int($tab/5) && (is_int($tab/3))){
            echo("LETSEAT");
        }else{
            echo($tab);
        } 
    }

    //Etape2
    for ($i = 1; $i <= $lenght ; $i++) {
        if(is_int($i/2)){

            echo($tabchaine[$i]);
        }
    }

    //Etape3
    function verifier($mot){

        $longueur= strlen($mot);

        if ($longueur < 8){
            echo("La chaine de caractère doit contenir au moins 8 caractères");

        }elseif ( preg_match ( "\w][_a-zA-Z0-9]" , $mot ) == false ){

            echo("La chaine de caractère doit contenir au moins un chiffre, une majuscule et une minuscule");

        }else{
            echo("La chaine de caractère est valide");
        }

    }
