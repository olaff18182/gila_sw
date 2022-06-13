<?php 
	include_once('mycon.php');
	if(isset($_POST['idCategorias'])){
		$sql2="SELECT * FROM `atributos1` WHERE `idCategorias` =".$_POST['idCategorias'];
		$re2=mysqli_query($enlace,$sql2);
		if (mysqli_num_rows($re2)){
			?><option value="0" selected disabled >Seleccionar un atributo</option><?php 
			while($row2=mysqli_fetch_assoc($re2)){
			?><option value="<?php echo $row2['idatributo1']; ?>"><?php echo $row2['txtatribut']; ?></option><?php 
			}
		}
	}
?>
