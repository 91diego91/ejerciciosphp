<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio 09</title>
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
    require_once 'app.php';
    $app = new App();
?>
</body></html>