<?php
    if(isset($_GET) && !empty($_GET)){
        echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
        echo "Registrado $_GET[libro] $_GET[editorial]";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        //var_dump($_GET);
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?> 