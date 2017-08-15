<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Login</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/></head>

</head>

<body>
<div align="center">
  <table width="1807" height="1030" border="0" align="center">
    <tr bordercolor="0">
      <td><iframe src="Banner.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe> </td>
    </tr>
    <tr bordercolor="0">
      <td><iframe src="Slider.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
    </tr>
    <tr bordercolor="0">
      <td height="104" bgcolor="#FFFFFF"><iframe src="Menu_Final.php" scrolling="no" width="1800" height="110" frameborder="0"/></iframe></td>
    </tr>
    <tr bordercolor="#0099FF">
      <td align="center" bgcolor="#FFFFFF" class="registro"><form id="form2" name="form2" method="post" action="">
        <p align="center" class="titulo1">Usuarios Registrados </p>
          <p align="center">
            <label></label>
            <?php

include ('Conexion.php');
$Nombre=$_POST["Nombre"];
$sql = "SELECT * FROM registro WHERE Nombre='$Nombre'";
if(!$result = $db->query($sql)){
die('Error en los datos [' . $db->error . ']');
}

echo "<table width=400 border=1 bgcolor='FFFFFF'>";
  echo "<tr>";
    echo "<td>ID</td>";
   echo " <td>Identificaci&oacuten</td>";
   echo " <td>Nombre</td>";
   echo " <td>Apellidos</td>";
   echo " <td>TipodeC&aacutencer</td>";
   echo " <td>Contrase&ntildea</td>";
   echo " <td>FechadeNacimiento</td>";
    echo "<td>G&eacutenero</td>";
 echo " </tr>"; 
 
 while($row = $result->fetch_assoc())
 {
 $IId_registro=stripslashes($row["Id_registro"]);
 $IIdentificacion=stripslashes($row["Identificacion"]);
 $NNombre=stripslashes($row["Nombre"]);
 $AApellidos=stripslashes($row["Apellidos"]);
 $TTipocancer=stripslashes($row["Tipocancer"]);
 $CContrasena=stripslashes($row["Contrasena"]);
 $FFechanacimiento=stripslashes($row["Fechanacimiento"]);
 $ffk_Genero=stripslashes($row["fk_Genero"]);
 //++++++++++++++ SUBCONSULTA
 $sql2 = "SELECT * FROM Genero WHERE Id_Genero='$ffk_Genero'";
 if(!$result2 = $db->query($sql2)){
 die('Error en los datos [' . $db->error . ']');
 }
 while($row2 = $result2->fetch_assoc())
 {
 $GGenero=stripslashes($row2["Genero"]);
 }
  //++++++++++++++ SUBCONSULTA
  echo "<tr>";
  echo "<td>$IId_registro</td>";
  echo " <td>$IIdentificacion</td>";
  echo " <td>$NNombre</td>";
  echo " <td>$AApellidos</td>";
  echo " <td>$TTipocancer</td>";
  echo " <td>$CContrasena</td>";
  echo " <td>$FFechanacimiento</td>";
  echo "<td>$GGenero</td>";
  echo " </tr>";
 }
 
echo"</table>";
?>
          </p>
          <p align="center" class="registro"><a href="ConsultarUsuarios.php">Salir</a></p>
          <p align="center" class="registro">&nbsp;</p>
          <p align="center">
            <label></label>
          </p>
          </form>
        <p align="center">
          <label></label>
        </p>
        <form id="form1" name="form1" method="post" action="">
          <label>
          <input name="Nombre" type="text" id="Nombre" value="<?php echo $Nombre; ?>" size="30" />
		  
          </label>
                </form>
        <p align="center">
          <label></label>
          <label>
          <input type="submit" name="Submit" value="Enviar" />
          </label>
        </p>
        <p align="center">&nbsp;</p></td></tr>
    <tr bordercolor="0">
      <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
    </tr>
  </table>
</div>
</body>
</html>
