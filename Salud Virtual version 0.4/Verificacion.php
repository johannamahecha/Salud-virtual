<?php 
session_start();
include('Conexion.php');

$Identificacion=$_POST["Identificacion"];
$Contrasena=$_POST["Contrasena"];
$cont=0;
$sql2 = "SELECT * FROM registro WHERE Identificacion='$Identificacion'";
	if(!$result2 = $db->query($sql2))
	{
		die('Error!!! ['. $db->error . ']');
	}
	while($row2 = $result2-> fetch_assoc())
		{
			$IIdentificacion=stripslashes ($row2["Identificacion"]);
			$CContrasena=stripslashes($row2["Contrasena"]);
			
			if($CContrasena == $Contrasena)
			{
				$cont=$cont+1;
			}
				if($cont=="0")
			{
			 echo "No es correcto";
			}
			if($cont!="0")
			{
			 $_SESSION['Identificacion']=$IIdentificacion;
			 $_SESSION['estado']="1";
			 header('Location: Administrador.php');
			}
		}
	

