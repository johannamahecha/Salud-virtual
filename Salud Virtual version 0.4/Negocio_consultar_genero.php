<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Login</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

</head>

<body onload="MM_preloadImages('img_regresar1.png')">
<div align="center">
  <table width="1807" height="1030" border="0" align="center">
    <tr bordercolor="0">
      <td><iframe src="Banner.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe> </td>
    </tr>
    <tr bordercolor="0">
      <td><iframe src="Slider.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
    </tr>
    <tr bordercolor="0">
      <td height="104" bgcolor="#FFFFFF"><iframe src="ActualizarEn.php" scrolling="no" width="1800" height="193" frameborder="0"/></iframe></td>
    </tr>
    <tr bordercolor="#0099FF">
      <td align="center" bgcolor="#FFFFFF" class="registro"><form id="form2" name="form2" method="post" action="">
        <p align="center" class="titulo1">Usuarios Registrados </p>
          <p align="center">
            <label>
			<?php

	include ('Conexion.php');
	$Genero=$_POST["Genero"];
	$sql = "SELECT * FROM Genero WHERE Genero='$Genero'";
	if(!$result = $db->query($sql)){
	die('Error en los datos [' . $db->error . ']');
	}
	
	echo "<table width=400 border=1 bgcolor='FFFFFF'>";
	  echo "<tr>";
		echo "<td>ID</td>";
	   echo " <td>Identificacion</td>";
	   echo " <td>Nombre</td>";
		echo "<td>Genero</td>";
	 echo " </tr>";
	 while($row = $result->fetch_assoc())
 {
 $GGenero=stripslashes($row["Id_Genero"]);
 $GGenero1=stripslashes($row["Genero"]);
 
 
 
 //++++++++++++++ SUBCONSULTA
	 $sql2 = "SELECT * FROM registro WHERE fk_Genero='$GGenero'";
	 if(!$result2 = $db->query($sql2)){
	 die('Error en los datos [' . $db->error . ']');
	 }
	 while($row2 = $result2->fetch_assoc())
	 {
	$IId_registro=stripslashes($row2["Id_registro"]);
	 $IIdentificacion=stripslashes($row2["Identificacion"]);
	 $NNombre=stripslashes($row2["Nombre"]);
	 $ffk_Genero=stripslashes($row2["fk_Genero"]);
	
  //++++++++++++++ SUBCONSULTA
	  echo "<tr>";
		echo "<td>$IId_registro</td>";
	   echo " <td>$IIdentificacion</td>";
	   echo " <td>$NNombre</td>";
		echo "<td>$GGenero1</td>";
	 echo " </tr>";
	 }
 
echo"</table>";
 }
?>
          <p align="center">&nbsp;
          <p align="center" class="registro">&nbsp;</p>
          <p align="center" class="registro"><a href="AdministradorEntidades.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"><img src="img_regresar.png" name="Image1" width="67" height="52" border="0" id="Image1" /></a></p>
          <p align="center">
            <label></label>
          </p>
          </form>
        <p align="center">
          <label></label>
        </p>
      <p align="center">&nbsp;</p></td></tr>
    <tr bordercolor="0">
      <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
    </tr>
  </table>
</div>
</body>
</html>
