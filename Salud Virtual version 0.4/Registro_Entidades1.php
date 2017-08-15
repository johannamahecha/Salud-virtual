<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Registro</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/></head>

</head>

<body>
<table width="1807" height="1030" border="0" align="center">
  <tr bordercolor="0">
    <td><iframe src="Banner.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe> </td>
  </tr>
  <tr bordercolor="0">
    <td><iframe src="Slider.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
  <tr bordercolor="0">
    <td height="104" bgcolor="#FFFFFF"><iframe src="Menu_Final.php" scrolling="no" width="1800" height="110" frameborder="0"/>
    
    </iframe></td>
  </tr>
  <tr bordercolor="#0099FF" class="registro">
    <td bgcolor="#FFFFFF" class="registro"><form id="form2" name="form2" method="post" action="">
        <p align="center">&nbsp;</p>
        <p align="center" class="titulo1">Datos</p>
        <p align="center">
		<?php
		include ('Conexion.php');
		
		$Nit=$_POST["Nit"];
		$NombreEntidad=$_POST["NombreEntidad"];
		$Telefono=$_POST["Telefono"];
		$Email=$_POST["Email"];
	
		
		echo "El nit es: $Nit  </br>" ;
		echo "El nombre de la entidad es: $NombreEntidad </br>" ;
		echo "El telefono es: $Telefono  </br>" ;
		echo "El email es: $Email  </br>" ;

		
		mysqli_query($db,"INSERT INTO registroen (Id_registroEn, Nit , NombreEntidad, Telefono, Email)
		VALUES(NULL, '$Nit ', '$NombreEntidad ', '$Telefono ',  '$Email')")
		or die(mysqli_error($db));
		echo "Datos registrados correctamente!!";
		?>
		</p>
        <p align="center">&nbsp;</p>
        <p align="center"><span class="parrafo1"><a href="Registro.php"></a></span></p>
        <p align="center">&nbsp;</p>
        </form>
      <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p></td></tr>
  <tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>
