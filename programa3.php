<?php

include("programa1.php");

$mat = $_POST["txtmatricula"];
$nom = $_POST["txtnombre"];
$ape = $_POST["txtapellidos"];
$gru = $_POST["txtgrupo"];
$edad = $_POST["txtedad"];
$correo = $_POST["txtcorreo"];
$contra = $_POST["txtclave"];
$comen = $_POST["txtcomentarios"];


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: programa1.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO usuarios(nombre, apellidos, grupo, matricula, corre, pass, comentario, edad) values ('$nom','$ape','$gru','$mat','$correo','$contra','$comen','$edad')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: programa1.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE usuarios SET nombre='$nom', apellidos='$ape', grupo='$gru', corre='$correo', pass='$contra', comentario='$comen', edad='$edad' WHERE matricula=$mat";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: programa1.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM usuarios WHERE matricula=$mat";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: programa2.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>