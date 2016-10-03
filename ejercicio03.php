<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 03</title>
</head><body>
<?php
//inicializamos
echo 'Array ordenado doble inicializado en la declaración <hr>';
$posiciones = array (
    'Base' => array('Pau','Riki'),
    'Escolta' => array('Pau','Riki'),
    'Ala-Pivot' => array('Pau','Riki'),
    'Pivot' => array('Pau','Riki'),
    'Ala' => array('Pau','Riki'),
);
?>

<?php
foreach ($posiciones as $posicion=>$datos){    
    echo '<tr>';
    echo "<td> $posicion </td>";
    foreach ($datos as $clave=>$dato){
        echo "<td> $dato </td>";
    }
    echo "<br>";
    echo '</tr>';
}
?>