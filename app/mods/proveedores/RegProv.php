    <?php


        require("Funciones.php");
         if (isset ($_REQUEST["Enviar"])){
            //echo $_REQUEST["idProveedor"];
           if(ExisteProveedor($_REQUEST["idProveedor"])==1){
              echo"<script language='javascript'>alert('Este ID ya se encuentra registrado')</script>";
              echo "<script type='text/javascript'>history.go(-1)</script>";
                     
           }elseif(ExisteNombreProveedor($_REQUEST["nombProveedor"])==1){
            echo"<script language='javascript'>alert('Este Nombre ya se encuentra registrado')</script>";
            echo "<script type='text/javascript'>history.go(-1)</script>";
         }elseif(ExisteCorreoProveedor($_REQUEST["email"])==1){
            echo"<script language='javascript'>alert('Este Email ya se encuentra registrado')</script>";
            echo "<script type='text/javascript'>history.go(-1)</script>";
  
            }else{
                // echo"No existe";
                $nomb=strtoupper($_REQUEST['nombProveedor']);
                $email=strtolower($_REQUEST['email']);
                RegistrarProveedor($_REQUEST['idProveedor'],$nomb,$_REQUEST['ciudad'],$_REQUEST['dirProveedor'],$_REQUEST['telProveedor'],$email);
                echo"<script language='javascript'>alert('Provedor registrado correctamente')</script>";
                echo "<script type='text/javascript'>history.go(-1)</script>";
         
            
            }
        }
   
    ?>



    