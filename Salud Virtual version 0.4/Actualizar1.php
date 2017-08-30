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
<table width="1807" height="1030" border="0" align="center">
  <tr bordercolor="0">
    <td><iframe src="Banner.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe> </td>
  </tr>
  <tr bordercolor="0">
    <td><iframe src="Slider.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
  <tr bordercolor="0">
    <td height="104" bgcolor="#FFFFFF"><iframe src="ActualizarEn.php" scrolling="no" width="1800" height="150" frameborder="0"/>
    
    </iframe></td>
  </tr>
  <tr bordercolor="#0099FF">
    <td align="center" bgcolor="#FFFFFF" class="registro"><form id="form2" name="form2" method="post" action="">
        <p align="center"><span class="titulo1">Usuarios Registrados </span></p>
        <p align="center">
          <label></label>
        <?php
			include ('Conexion.php');
			$Email=$_POST["Email"];
			$sql = "SELECT * FROM  registroen WHERE Email = '$Email'";
			if(!$result = $db->query($sql)){
				die ('Error no se encuentran resultados!!! [' . $db->error . ']');
			}
			echo "<table width=400 border=1 bgcolor='FFFFFF' bordercolor='#03A9F4' >";
			echo "<tr>";
			echo "<td>Id</td>";
			echo "<td>Nit</td>";
			echo "<td>NombreEntidad</td>";
			echo " <td>Tel&eacutefono</td>";
            echo " <td>Email</td>";
			echo " <td>Contrase&ntildea</td>";
			echo "</tr>";
			while($row = $result->fetch_assoc())
	{
		$IId_registroEn=stripslashes($row["Id_registroEn"]);
		$NNit=stripslashes($row["Nit"]);
		$NNombreEntidad=stripslashes($row["NombreEntidad"]);
		$TTelefono=stripslashes($row["Telefono"]);
		$EEmail=stripslashes($row["Email"]);
        $CContrasena=stripslashes($row["Contrasena"]);
  
			
			//++++++++++++++ SUBCONSULTA
		
		echo "<tr>";
		echo "<td>$IId_registroEn</td>";
		echo  "<td>$NNit</td>";
		echo " <td>$NNombreEntidad</td>";
		echo " <td>$TTelefono</td>";
        echo " <td>$EEmail</td>";
        echo " <td>$CContrasena</td>";
		echo "</tr>";
		}
		echo "</table>";
?>
        </p>
        <p align="center">
          <label></label>
        </p>
        </form>
      <form id="form2" name="form2" method="post" action="Negocio_consultar_Identificacion2.php"></p>
          <table width="265" border="1" bordercolor="03A9F4" align="center">
            <tr>
              <td width="144" class="registro">Id</td>
              <td width="105"><div align="center"><?php echo $IId_registroEn; ?>
                    <input name="Idd" type="hidden" id="Idd" value="<?php echo $IId_registroEn; ?> " />
              </div></td>
            </tr>
            <tr>
              <td>Nit</td>
              <td><div align="center"><?php echo $NNit;?>
                    <input name="Nit" type="hidden" id="Nit" value="<?php echo $NNit;?>" />
              </div></td>
            </tr>
            <tr>
              <td class="registro">Nombre Entidad</td>
              <td><div align="center"><?php echo $NNombreEntidad;?>
                    <input name="NombreEn" type="hidden" id="NombreEn" value="<?php echo $NNombreEntidad;?>" />
              </div></td>
            </tr>
            <tr>
              <td class="registro">Tel&eacute;fono</td>
              <td> <input name="Tel" type="text" id="Tel" value="<?php echo $TTelefono;?>" /></td>
            </tr>
            <tr>
              <td class="registro">Email</td> 
              <td><input name="Ema" type="text" id="Ema" value="<?php echo $EEmail;?>" /></td>
            </tr>
        </table>
        </label>
	    
        <p>
          <input type="submit" name="Submit" value="Enviar" />
        </p>
        <p>&nbsp;</p>
        <p><a href="AdministradorEntidades.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"><img src="img_regresar.png" name="Image1" width="79" height="59" border="0" id="Image1" /></a><a href="Index2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"></a> </p>
      </form>
      <p align="center">
        <label></label>
      </p>
    <p align="center">&nbsp;</p></td></tr>
  <tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>
