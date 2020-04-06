<?php 
require_once("../../rq/funcionesprov.php");

$depart=$_POST['dprtmnto'];
$ciud=$_POST['ciudad'];

$ciudades=[];
	$ciudades=CiudadesDepartamento($depart);
	
	

	foreach ($ciudades as $key => $dato) { 
		if($dato['Nombre']==$ciud){
		echo"<option value='$dato[IdCiudad]' selected>$dato[Nombre]</option>";	
		}else{
			echo"<option value='$dato[IdCiudad]'>$dato[Nombre]</option>";
		}
	
	}
