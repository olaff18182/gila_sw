<?php
	include_once('mycon.php');
	if(isset($_POST['SKU'])){
		$sql1="INSERT INTO `productos`(`Nombre`,`SKU`,`Marca`,`Costo`,`idCategorias`,`idatributo1`,`atributos2`) VALUES ('".$_POST['Nombre']."','".$_POST['SKU']."','".$_POST['Marca']."','".$_POST['Costo']."','".$_POST['Categorias']."','".$_POST['atributo']."','".$_POST['Atributo2']."');";
		mysqli_query($enlace,$sql1);
	}
?>