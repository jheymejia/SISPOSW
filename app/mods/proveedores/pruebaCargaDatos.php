<?php
    require_once("Funciones.php");
    $datos=CiudadesColombia();
    foreach ($datos as $key => $value) {
        # code...
        echo $value["nombre"];
        echo "<br>";
    }



?>