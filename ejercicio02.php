 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 02</title>
</head><body>
<?php
//inicializamos
echo "Array ordenado inicializado en la declaración <hr>";
$array1 = array (
    'Base' => 'Pedro',
    'Alero' => 'Manuel',
    'Pivot' => 'García López',
    'Ala-Pivot' => 'Juan',
    'Escolta' => 'Mario',
);


//foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
/*echo 'añadimos un elemento más y hacemos un volcado: <br>';
$array1['nacionalidad'] = 'Española';
var_dump($array1);*/
?>
</body></html>