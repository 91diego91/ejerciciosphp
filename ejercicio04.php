<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 04</title>
</head><body>
<?php

$array = array(3,2,9,3,5);

function mayor($array)
{
    $mayor = $array[0];
    foreach ($array as $elemento) { 
        if ($elemento>$mayor) {
            $mayor = $elemento;
        }
    }
    //echo "El mayor del array es :  $mayor";
    return $mayor;
}


function menor($array)
{
    $menor = $array[0];
    foreach ($array as $elemento) { 
        if ($elemento<$menor) {
            $menor = $elemento;
        }
    }
    //echo "El menor del array es :  $menor";
    return $menor;
}


echo "El mayor del array es: " . mayor($array) . "<br>";
echo "El menor del array es: " . menor($array) . "<br>";



?>
</body></html>