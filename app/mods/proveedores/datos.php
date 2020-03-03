<?php 
require_once("Funciones.php");

$depart=$_POST['dprtmnto'];

$ciudades=[];
	$ciudades=CiudadesDepartamento($depart);
	
	echo"<select id='Ciudad' name='Ciudad' class='btn-block'>";

	foreach ($ciudades as $key => $dato) { 
		
		echo"<option value='$dato[codigoCiudad]'>$dato[nombre]</option>";
	}

	echo"</select>";
	

?>