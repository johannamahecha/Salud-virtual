<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/><style type="text/css"></style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #000000}
-->
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
<table width="1807" height="281" border="0">
  <tr>
    <td height="40"><ul id="MenuBar3" class="MenuBarHorizontal">
    <li><a href="AdministradorEntidades.php" target="_parent">Inicio</a></li>
      <li><a class="MenuBarItemSubmenu" href="#">Consultar usuarios  </a>
         <ul>
		      <li><a href="pentidades.php" target="_parent">Brindar_beneficio</a></li>
              <li><a href="ConsultarporIdentificacion.php" target="_parent">Identificación</a></li>
			  <li><a href="Consultarpornombre.php" target="_parent">Nombre</a></li>
			  <li><a href="Consultarporgenero.php" target="_parent">Genero</a></li>
          </ul>
      </ul> 
      <ul id="MenuBar3" class="MenuBarHorizontal">
        <li><a href="foro.php" target="_parent">Foro</a></li>
      </ul>
      <ul id="MenuBar3" class="MenuBarHorizontal">
        <li><a href="ConsultarporIdentificacion2.php" target="_parent">Actualizar datos </a></li>
      </ul>
     
      <ul id="MenuBar3" class="MenuBarHorizontal">
        <li><a href="Salir.php" target="_parent">Cerrar sesión </a></li>
      </ul>
      <p align="center" class="footer"></p>
    <p align="center" class="footer"><tr bordercolor="0" bgcolor="#FFFFFF">
    <td height="223"></iframe>
      <div align="center">
        <p>
          <?php
		  $Conexion=mysqli_connect('localhost','root','','salud_virtual');
		  ?>
          <span class="titulo1"> Foro</span> </p>
        <table width="1656" border="1" bordercolor="#0099FF">
          <tr>
            <td class="parrafo1">Id</td>
            <td bgcolor="#FFFFFF" class="parrafo1">Autor</td>
            <td class="parrafo1">Titulo</td>
            <td class="parrafo1">Mensaje</td>
            <td class="parrafo1">Fecha</td>
          </tr>
          <?php
		  $sql="SELECT * FROM foro";
		  $result=mysqli_query($Conexion,$sql);
		  while($mostrar = mysqli_fetch_array($result)){
		  ?>
          <tr>
            <td class="mision"><?php echo $mostrar['id']?></td>
            <td bgcolor="#FFFFFF" class="mision"><?php echo $mostrar['autor']?></td>
            <td class="mision"><?php echo $mostrar['titulo']?></td>
            <td class="mision"><?php echo $mostrar['mensaje']?></td>
            <td class="mision"><?php echo $mostrar['fecha']?></td>
          </tr>
          <?php
		  }
		  ?>
        </table>
        <p><a href="formulario.php" class="Login">Opinar</a></p>
        <p><a href="AdministradorEntidades.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','img_regresar1.png',1)"><img src="img_regresar.png" name="Image1" width="63" height="43" border="0" id="Image1" /></a></p>
      </div></td>
    </tr></p>
    </td>
  <td height="2"></tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>