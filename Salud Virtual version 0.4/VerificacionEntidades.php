<?php 
session_start();
include('Conexion.php');

$Email=$_POST["Email"];
$Contrasena=$_POST["Contrasena"];
$cont=0;

$sql2 = "SELECT * FROM registroen WHERE Email='$Email'";
	if(!$result2 = $db->query($sql2))
	{
		die('Error!!! ['. $db->error . ']');
	}
	while($row2 = $result2-> fetch_assoc())
		{
			$EEmail=stripslashes($row2["Email"]);
			$CContrasena=stripslashes($row2["Contrasena"]);
		
			if($CContrasena==$Contrasena)
			{
				$cont=$cont+1;
		
			}
				if($cont=="0")
			{
			 echo "No es correcto";
			}
			if($cont!="0")
			{
			 $_SESSION['Email']=$EEmail;
			 $_SESSION['estado']="1";
			 header('Location: AdministradorEntidades.php');
			}
		}
?>