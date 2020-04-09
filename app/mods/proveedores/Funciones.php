<?php


     function ExisteProveedor($provee){

        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select * from proveedores where Id_Proveedor='$provee'" ;
        
        $datos=mysqli_query($conexion,$consulta)or die(mysqli_error($conexion));
        mysqli_close($conexion);
        if($reg=mysqli_fetch_array($datos)){
           return 1;
        }else{
            return 0;
        }
        
    }
    function ExisteNombreProveedor($nombre){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select * from proveedores where Nombre_Prov='$nombre'" ;
        
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        if($reg=mysqli_fetch_array($datos)){
           return 1;
        }else{
            return 0;
        }
    }
    function ExisteCorreoProveedor($correo){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select * from proveedores where Email='$correo'" or die("Eror: " .$conexion->error);
        
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        if($reg=mysqli_fetch_array($datos)){
           return 1;
        }else{
            return 0;
        }
    }
    function RegistrarProveedor($id,$nomb,$ciudad,$dir, $tel, $email){
        require("conexion.php");
        $res=false;
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
       $consulta="Insert into proveedores(Id_Proveedor,Nombre_Prov,IdCiudad,Direccion,Telefonos,Email) 
        Values('$id','$nomb','$ciudad','$dir','$tel','$email')";
        if(mysqli_query($conexion,$consulta) or die(mysqli_error($conexion))==1){
            $res= 1;
        }else{
            $res=0;
        }
        mysqli_close($conexion);
        return $res;
    }
    function eliminarProveedor($id){
        require("conexion.php");
        $res=false;
        $consulta="Delete From proveedores Where Id_Proveedor='$id'";
        if(mysqli_query($conexion,$consulta) or die(mysqli_error($conexion))==1){
            $res= 1;
        }else{
            $res=0;
        }
        mysqli_close($conexion);
        return $res;
    }
    function actualizarProveedor($id,$nombre,$codCiudad,$direccion,$telefono,$email){
        require("conexion.php");
        $consulta="update proveedores set Nombre_Prov='$nombre', IdCiudad='$codCiudad', Direccion='$direccion', Telefonos='$telefono', Email='$email' where Id_Proveedor='$id'";
        //mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        $ejecutar = $conexion->query($consulta); // devuelve true/false
        mysqli_close($conexion);
       
        return $ejecutar;
    }
    function CiudadesColombia(){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select * from ciudad order by Nombre";
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function CiudadesDepartamento($dprtmnto){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select * from ciudad where Departamento='$dprtmnto' order by Nombre";
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function Departamentos(){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select distinct Departamento from ciudad order by Departamento";
        $datos=mysqli_query($conexion,$consulta) ;
        mysqli_close($conexion);
        return $datos;
    }
    function ProveedorXid($id){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov,C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
         from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where P.Id_Proveedor like '%$id%' Order by P.Nombre_Prov";
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProveedorXnombre($nombre){
        require("conexion.php");
        // $conexion=mysqli_connect("localhost", "root", "", "tps89") or
        // die("Problemas con la conexión");
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov,C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
        from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where P.Nombre_Prov like '%$nombre%' Order by P.Nombre_Prov";
     $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProveedorXcorreo($correo){
        require("conexion.php");
       
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov,C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
        from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where P.Email like '%$correo%' Order by P.Nombre_Prov";
       $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProveedorXciudad($ciudad){
        require("conexion.php");
       
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov,C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
        from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where C.Nombre like '%$ciudad%' Order by P.Nombre_Prov";
       $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function ProveedorXdepartamento($departamento){
        require("conexion.php");
       
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov,C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
        from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where C.Departamento like '%$departamento%' Order by P.Nombre_Prov";
       $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function DatosProveedor($id){
        require("conexion.php");
       
        $consulta="Select P.Id_Proveedor, P.Nombre_Prov, C.IdCiudad, C.Nombre Ciudad, C.Departamento, P.Direccion, P.Telefonos, P.Email
        from proveedores P Inner Join ciudad C On P.IdCiudad=C.IdCiudad Where P.Id_Proveedor ='$id'";
     $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function DepartamentoCiudad($codCiudad){
        require("conexion.php");
       
        $consulta="Select Departamento from ciudad Where IdCiudad = '$codCiudad'";
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
    function CiudadCodigo($codCiudad){
        require("conexion.php");
       
        $consulta="Select Nombre from ciudad Where IdCiudad = '$codCiudad'";
        $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
        mysqli_close($conexion);
        return $datos;
    }
