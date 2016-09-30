<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 4</title>
</head><body>
<?php

echo "Array ordenado inicializado en la declaración <hr>";
$array = array(1,"elemento2", 3.3, true, false, "elemento5");

//bucle foreach:
echo "<hr> Recorro el array con un bucle foreach simple <br>";
foreach ($array as $element){
    echo $element . '<br>';
}
?>
</body></html>