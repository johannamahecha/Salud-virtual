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
	<p align="center">
   
    <table width="1585">
    <tr>
    <td>&nbsp;</td>
    </tr>
    
    
    
    </table>
    </p>
	<form action="Contactenos1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	  <span class="titulo1">
	  <center>
      </center>
      </span>
	  <p>
        <label>
        <center>
          <p><form id="form2" name="form2" method="post" action="consultarusuarios002.php">
        <label></label>
        <div align="center">
          <p>
          <?php
		  $Conexion=mysqli_connect('localhost','root','','salud_virtual');
		  ?>
          <span class="titulo1">    Beneficios  </span><table width="1656" border="1" bordercolor="#0099FF">
          <tr>
              <td width="136" class="parrafo1">Id</td>
              <td width="333" bgcolor="#FFFFFF" class="parrafo1">Entidad</td>
              <td width="429" class="parrafo1">Beneficio</td>
              <td width="378" class="parrafo1">Contacto</td>
              <td width="346" class="parrafo1">Fecha</td>
          </tr>
          <?php
		  $sql="SELECT * FROM pentidades";
		  $result=mysqli_query($Conexion,$sql);
		  while($mostrar = mysqli_fetch_array($result)){
		  ?>
          <tr>
              <td class="mision"><?php echo $mostrar['id']?></td>
              <td  class="mision"><?php echo $mostrar['entidad']?></td>
              <td class="mision"><?php echo $mostrar['beneficio']?></td>
              <td class="mision"><?php echo $mostrar['contacto']?></td>
              <td class="mision"><?php echo $mostrar['fecha']?></td>
          </tr>
          <?php
		  }
		  ?>
          </table>
          <p><a href="formularioEntidades.php" class="Login"></a></p>
          <p><a href="Administrador.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"><img src="img_regresar.png" name="Image1" width="67" height="46" border="0" id="Image1" /></a></p>
        </div>
        <center></center>
          
          <p>&nbsp; </p>
          <p align="center">&nbsp;</p>
      </form>
  <tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>

