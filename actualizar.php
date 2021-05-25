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

   $sql="UPDATE `ciudades` SET 
   `nombre`='$name',
   `cantidadHabitantes`=$canth,
   `latitud`='$lati',
   `longitud`='$longi' WHERE id=".$id;


	if($cone->query($sql)){
		echo "<br/>Actualizacion exitosa";
	}else{
		echo "<br/>no se a podido actualizar: ERROR: ".$cone->error;
		exit();
	}
	$cone->close();

?>