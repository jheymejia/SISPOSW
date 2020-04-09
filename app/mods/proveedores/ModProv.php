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
          $respuesta['msj']="El Proveedore No Existe";
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
    } elseif ($operacion == "guardarDatos") {
        $nombre = $_POST['nombre'];
        $idCiudad = $_POST['idCiudad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        if (ExisteNombreProveedor($nombre)==1){
            $respuesta['fallo']=true;
            $respuesta['msj']="Este nombre ya existe.";
            
        }
        if (ExisteCorreoProveedor($email)==1){
            $respuesta['fallo']=true;
            $respuesta['msj']= $respuesta['msj']." Este correo ya existe.";
           
        }
        $nomb=strtoupper($nombre);
        $correo=strtolower($email);

        if (actualizarProveedor($idProvee, $nomb, $idCiudad, $direccion, $telefono, $correo) == 0) {
            $respuesta['msj']= $respuesta['msj']." No se pudo actualizar el Proveedor.";
            $respuesta['fallo'] = true;
        } else {
            $respuesta['msj'] = "Proveedor actualizado correctamente.";
            $respuesta['fallo'] = false;
        }
    }
  enviarRespuesta($respuesta);
}

function enviarRespuesta($resp=[]){
      echo json_encode($resp);
    die();
}