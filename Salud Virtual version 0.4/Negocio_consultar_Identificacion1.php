<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Login</title>
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
  <tr bordercolor="#0099FF">
    <td align="center" bgcolor="#FFFFFF" class="registro"><form id="form2" name="form2" method="post" action="">
        <p align="center"><span class="titulo1">Usuarios Registrados </span></p>
        <p align="center">
          <label></label>
        <?php
	  include('Conexion.php');
	  $Idd=$_POST["Idd"];
	  $Ident=$_POST["Ident"];
	  $Nom=$_POST["Nom"];
	  $Gene=$_POST["Gene"];
	  
	  mysqli_query($db, "UPDATE registro SET Identificacion ='$Ident', fk_Genero ='$Gene' WHERE Id_registro = '$Idd'") or die(mysqli_error($db));
	  
	  echo "Datos enviados correctamente";
	  ?>
        </p>
        <p align="center">
          <label></label>
        </p>
        </form>
            <tr>
              
            </tr>
        </table>
        </label>
	    
      </form>
      <p align="center">
        <label>
        <input type="submit" name="Submit" value="Enviar" />
        </label>
      </p>
    <p align="center">&nbsp;</p></td></tr>
  <tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>
