<?php
 /*clase aapp*/
require_once 'usuario.php';
 class App
{
    private $_usuario;
    function __construct()
    {
        echo 'En App';

        if (isset($_GET) && empty($_GET)) {
            $this->_usuario = new Usuario($_GET['Nombre'], $_GET['telefono']);
        }
    }
 }

