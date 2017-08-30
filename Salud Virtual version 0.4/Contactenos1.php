<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/><style type="text/css">

</style>
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

<body onload="MM_preloadImages('img_regresar1.png')">
<table width="1807" height="1419" border="0" align="center">
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
 
  <tr>
    <td height="367" bordercolor="0" bgcolor="#FFFFFF">
	<p align="center">&nbsp;</p>
	<form action="" method="post" enctype="multipart/form-data" name="form1" class="registro" id="form1">
      <p align="center" class="titulo1">Cont&aacute;ctenos</p>
      <p align="center" class="Login">
	  <?php
		include ('Conexion.php');
		
		$Nombre=$_POST["Nombre"];
		$Correo=$_POST["Correo"];
		$Telefono=$_POST["Telefono"];
		$Asunto=$_POST["Asunto"];
		$Mensaje=$_POST["Mensaje"];
		
		echo "El nombre es: $Nombre</br>" ;
		echo "El correo es : $Correo</br>" ;
		echo "El telefono es: $Telefono</br>" ;
		echo "El asunto  es: $Asunto</br>" ;
		echo "El mensaje  es: $Mensaje</br>" ;
		
		mysqli_query($db,"INSERT INTO contactenos (Id_contactenos, Nombre , Correo, Telefono, Asunto, Mensaje)
		VALUES(NULL, '$Nombre ', '$Correo ', '$Telefono ', '$Asunto ', '$Mensaje ')")
		or die(mysqli_error($db));
		echo "Datos registrados correctamente!!";
		?>
	  </p>
      <span class="titulo1"><center>
        <a href="Index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"><img src="img_regresar.png" name="Image1" width="70" height="55" border="0" id="Image1" /></a>
      </center></span>
      <p>&nbsp;</p>
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

