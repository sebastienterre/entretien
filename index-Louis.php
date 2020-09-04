<?php

$array_values = [6,10,15,38,30000,19685,6022,6759];

function processArray_Values($array_values) {
    foreach($array_values as $value) {
        if ($value % 3) {
            echo 'LETS';
        } elseif ($value % 5) {
            echo 'EAT';
        } elseif ($value % 3 and $value %5) {
            echo 'LETSEAT';
        } else {
            echo $value;
        }
        echo '<br>';
    }
}

echo 'Exercice 1 <br>';
processArray_Values($array_values);
echo '<br>';


echo 'Exercice 2 <br>';
$string = 'ABCDEF1234567910';
$string_arr = str_split($string);

echo $string . '<br>';
foreach($string_arr as $key => $value) {
    if($key % 2) {
        echo $value;
    }
}
echo '<br><br>';


echo 'Exercice 3 <br>';
$string2 = 'kA9kzejh2';
$string2_arr = str_split($string2);

function checkString($string2,$array_values2) {
    if (strlen($string2) >= 8) {
        echo "Il y a ".strlen($string2). " caractères";
    }
    $is_a_number = false;
    $is_a_maj = false;
    $is_a_min = false;

    foreach($array_values2 as $key => $value) {
        if (ctype_upper($value)) {
            echo "Il y a une majuscule";
            $is_a_maj = true;
        } elseif (ctype_lower($value)) {
            echo "Il y a une minuscule";
            $is_a_min = true;
        } elseif (is_numeric($value)) {
            echo "Il y a un chiffre";
            $is_a_number = true;
        } 
        echo '<br>';
    }
}
checkString($string2,$string2_arr);