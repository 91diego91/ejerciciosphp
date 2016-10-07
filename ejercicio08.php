<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 08</title>
</head><body>
    <h2>Registro</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Nombre</label>
        <input type="text" value="" name="nombre"><br>
        <label>Teléfono</label>
        <input type="text" value="" name="telefono"><br>
        <input type="submit" value="enviar">
    </form>
<?php
    if (isset($_GET) && !empty($_GET)) {
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Registrado $_GET[nombre] $_GET[telefono]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        //var_dump($_GET);
    } else {
         echo "Todavía no hemos recibido nada!";
    }
?>
</body></html>