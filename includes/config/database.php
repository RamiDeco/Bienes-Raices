<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'Ruspallata2003', 'bienesraices_crud');

    if (!$db){
        echo "No se pudo conectar a la base de datos";
        exit;
    }

    return $db;
}