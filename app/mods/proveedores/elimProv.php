<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once("Funciones.php");
    $operacion = $_POST['operacion'];
    $respuesta = [];
    $respuesta["fallo"] = false;
    $respuesta['msj'] = "";
    $idProvee = $_POST['idProvee'];
    if ($operacion == "cargarDatos") {
        if(ExisteProveedor($idProvee)==0){
            $respuesta['fallo']=true;
            $respuesta['msj']="Este Proveedor no existe";
            enviarRespuesta($respuesta);
        }
        $datosProvee = DatosProveedor($idProvee);
        foreach ($datosProvee as $key => $dato) {
            # code...
            $respuesta['nombre'] = $dato['Nombre_Prov'];
            $respuesta['idCiudad'] = $dato['IdCiudad'];
            $respuesta['ciudad'] = $dato['Ciudad'];
            $respuesta['departamento'] = $dato['Departamento'];
            $respuesta['direccion'] = $dato['Direccion'];
            $respuesta['email'] = $dato['Email'];
            $respuesta['telefono'] = $dato['Telefonos'];
        }
    } elseif ($operacion == "eliminar") {
        if (eliminarProveedor($idProvee) == 0) {
            $respuesta['msj']= "No se pudo Borrar el Proveedor. \n Es posible que existan productos enlazados a este proveedor";
            $respuesta['fallo'] = true;
        } else {
            $respuesta['msj'] = "Proveedor Borrado correctamente.";
            $respuesta['fallo'] = false;
        }
    }
    enviarRespuesta($respuesta);
}
function enviarRespuesta($resp=[]){
    echo json_encode($resp);
    die();
}