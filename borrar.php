<?php
include('conect.php');

	$id=$_GET["id"];
	

	$arreglo[]=$id;

	json_encode($arreglo);

	$sql="DELETE FROM ciudades WHERE id=$id";


	if($cone->query($sql)){
		echo "<br/>Se a borrado";
	}else{
		echo "<br/>no se a podido borrar: ERROR: ".$cone->error;
		exit();
	}
	$cone->close();

?>