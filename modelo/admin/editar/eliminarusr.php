<?php 
	include("../../../zcontro/conexion.php");

	$id=$_REQUEST['id'];


$query="DELETE FROM usertable WHERE id='$id' ";


$ejecutar = mysqli_query($con, $query);
header('Location: ./../panelctrl.php');

mysqli_close($con);



 ?>