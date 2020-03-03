<?php
         function ExisteProveedor($provee){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");

            $consulta="Select * from proveedores where idProveedores='$provee'" or die("Eror: ".msqli_error($conexion));
            
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);
            if($reg=mysqli_fetch_array($datos)){
               return 1;
            }else{
                return 0;
            }
        }
        function ExisteNombreProveedor($nombre){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");

            $consulta="Select * from proveedores where nombre='$nombre'" or die("Eror: " .msqli_error($conexion));
            
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);
            if($reg=mysqli_fetch_array($datos)){
               return 1;
            }else{
                return 0;
            }
        }
        function ExisteCorreoProveedor($correo){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");

            $consulta="Select * from proveedores where email='$correo'" or die("Eror: " .msqli($conexion));
            
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);
            if($reg=mysqli_fetch_array($datos)){
               return 1;
            }else{
                return 0;
            }
        }
        function RegistrarProveedor($id,$nomb,$ciudad,$dir, $tel, $email){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Insert into proveedores(idProveedores,nombre,codigoCiudad,direccion,telefono,email) 
            Values('$id','$nomb','$ciudad','$dir','$tel','$email')";
            mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);
            return 1;
        }
        function CiudadesColombia(){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select * from ciudad order by nombre";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }
        function CiudadesDepartamento($dprtmnto){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select * from ciudad where departamento='$dprtmnto' order by nombre";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }
        function Departamentos(){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select distinct departamento from ciudad order by departamento";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }
        function ProveedorXid($id){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select * from proveedores Where idProvedores like '%$id%' Order by nombre";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }
        function ProveedorXnombre($nombre){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select * from proveedores Where nombre like '%$nombre%' Order by nombre";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }
        function ProveedorXcorreo($correo){
            $conexion=mysqli_connect("localhost", "root", "", "tps89") or
            die("Problemas con la conexión");
            $consulta="Select * from proveedores Where email like '%$correo%' Order by nombre";
            $datos=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
            mysqli_close($conexion);


            return $datos;
        }

        ?>