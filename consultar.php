<?php
include('conect.php');


	$sql= "SELECT * FROM ciudades";
 	$resul=mysqli_query($cone,$sql);
	
	$arreglos=array();

	while ($row = mysqli_fetch_array($resul)) {
		
        $arreglo=array();
		$arreglo[0]=$row["id"];
		$arreglo[1]=$row["nombre"];
		$arreglo[2]=$row["cantidadHabitantes"];
		$arreglo[3]=$row["latitud"];
		$arreglo[4]=$row["longitud"];
		$arreglos []=$arreglo;
		
		}
	echo json_encode($arreglos);
?>