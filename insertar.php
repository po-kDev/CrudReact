<?php
include('conect.php');

	$id=$_GET["id"];
	$name=$_GET["nom"];
	$canth=$_GET["habi"];
	$lati=$_GET["latitud"];
	$longi=$_GET["longitud"];

	$arreglo[]=$id;
	$arreglo[]=$name;
	$arreglo[]=$canth;
	$arreglo[]=$lati;
	$arreglo[]=$longi;

	echo json_encode($arreglo);


	$sql="INSERT INTO ciudades(id,nombre,cantidadHabitantes,latitud,longitud)VALUES($id,'$name',$canth,'$lati','$longi')";


	if($cone->query($sql)){
		echo "<br/>registro exitoso";
	}else{
		echo "<br/>no se a podido registrar: ERROR: ".$cone->error;
		exit();
	}
	$cone->close();

?>