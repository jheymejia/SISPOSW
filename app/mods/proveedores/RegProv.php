<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando...</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <?php
        require_once("Funciones.php");
         if (isset ($_REQUEST["Enviar"])){
            //echo $_REQUEST["idProveedor"];
           if(ExisteProveedor($_REQUEST["idProveedor"])==1){
               echo"El Provedor ya existe";
               echo"<a href='RegistrarProveedor.php' class='btn btn-primary btn-lg btn-block bg-warning text-dark' role='button' aria-pressed='true'>Ir a Registrar Proveedores</a>";
               // header("location:RegistrarProveedor.php onclick="return confirm('Agregar este Proveedor?')"");
           }elseif(ExisteNombreProveedor($_REQUEST["nombProveedor"])==1){
                echo"El Nombre de Provedor ya existe";
                echo"<a href='RegistrarProveedor.php' class='btn btn-primary btn-lg btn-block bg-warning text-dark' role='button' aria-pressed='true'>Ir a Registrar Proveedores</a>";
            }elseif(ExisteCorreoProveedor($_REQUEST["email"])==1){
                echo"El Correo de Provedor ya existe";
                echo"<a href='RegistrarProveedor.php' class='btn btn-primary btn-lg btn-block bg-warning text-dark' role='button' aria-pressed='true'>Ir a Registrar Proveedores</a>";

            }else{
                // echo"No existe";
                RegistrarProveedor($_REQUEST['idProveedor'],$_REQUEST['nombProveedor'],$_REQUEST['Ciudad'],$_REQUEST['dirProveedor'],$_REQUEST['telProveedor'],$_REQUEST['email']);
                echo"<a href='RegistrarProveedor.php' class='btn btn-primary btn-lg btn-block bg-warning text-dark' role='button' aria-pressed='true'>Proveedor Registrado</a>";
               
            
            }
        }
   
    ?>
</body>
</html>