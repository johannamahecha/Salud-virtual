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
    <td height="104" bgcolor="#FFFFFF"><iframe src="ActualizarEn.php" scrolling="no" width="1800" height="193" frameborder="0"/>
    
    </iframe></td>
  </tr>
 
  <tr>
    <td height="367" bordercolor="0" bgcolor="#FFFFFF">
	<p align="center">&nbsp;</p>
	<form action="" method="post" enctype="multipart/form-data" name="form1" class="registro" id="form1">
	  <p align="center" class="registro"><a href="pentidades.php"></a>
	    <?php
		include ('Conexion.php');
		
		$entidad=$_POST["en"];
		$beneficio=$_POST["beneficio"];
		$contacto=$_POST["contacto"];
		$fecha=$_POST["fecha"];
	  
 
		echo "entidad: $entidad  </br>" ;
		echo "beneficio: $beneficio </br>" ;
		echo "contacto: $contacto  </br>" ;
		echo "fecha: $fecha </br>" ; 
		
		
		mysqli_query($db,"INSERT INTO pentidades (id, entidad, beneficio, contacto, fecha)
		VALUES(NULL, '$entidad ', '$beneficio ', '$contacto ', '$fecha ')")
		or die(mysqli_error($db));
		echo "Datos enviados correctamente!!";
		?>
	    </p>
	  <p align="center" class="titulo1"><a href="pentidades.php">ver</a></p>
      <span class="titulo1"><center>
      </center></span>
      <p>&nbsp;</p>
          <p>&nbsp;</p>
      </form>
	<tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>

