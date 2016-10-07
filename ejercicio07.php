
<?php
/*desde aqui estoy llamando a la clase rectangulo que esta en rectangulo.php*/

require_once 'rectangulo.php';

$rectangulo = new Rectangulo(20, 13);


echo "Su superficie es " . $rectangulo->superficie();
echo '<br>';
echo "Su perimetro es " . $rectangulo->perimetro();
