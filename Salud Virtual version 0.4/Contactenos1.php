<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/><style type="text/css">

</style>
</head>

<body>
<table width="1807" height="1419" border="0" align="center">
  <tr bordercolor="0">
    <td><iframe src="Banner.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe> </td>
  </tr>
   <tr bordercolor="0">
    <td><iframe src="Slider.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
  <tr bordercolor="0">
    <td height="104" bgcolor="#FFFFFF"><iframe src="Menu.html" scrolling="no" width="1800" height="110" frameborder="0"/>
    
    </iframe></td>
  </tr>
 
  <tr>
    <td height="367" bordercolor="0" bgcolor="#FFFFFF">
	<p align="center">&nbsp;</p>
	<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p align="center" class="titulo1">Cont&aacute;ctenos</p>
      <p align="center" class="titulo1">
	  <?php
		include ('Conexion.php');
		
		$Nombre=$_POST["Nombre"];
		$Correo=$_POST["Correo"];
		$Telefono=$_POST["Telefono"];
		$Asunto=$_POST["Asunto"];
		$Mensaje=$_POST["Mensaje"];
		
		echo "El nombre es: $Nombre  </br>" ;
		echo "El correo es : $Correo </br>" ;
		echo "El telefono es: $Telefono  </br>" ;
		echo "El asunto  es: $Asunto  </br>" ;
		echo "El mensaje  es: $Mensaje  </br>" ;
		
		mysqli_query($db,"INSERT INTO contactenos (Id_contactenos, Nombre , Correo, Telefono, Asunto, Mensaje)
		VALUES(NULL, '$Nombre ', '$Correo ', '$Telefono ', '$Asunto ', '$Mensaje ')")
		or die(mysqli_error($db));
		echo "Datos registrados correctamente!!";
		?>
	  </p>
      <span class="titulo1"><center>
      </center></span>
      <p>&nbsp;</p>
      <table width="587" height="167" border="1" align="center" bordercolor="#2CB0FA">
        
      </table>
      <p>
        <label>
        <center>
          <p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </form>
	<tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>

