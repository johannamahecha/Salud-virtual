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
	<form action="agregarE.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p align="center" class="titulo1">Publicar</p>
      <span class="titulo1"><center>
      </center></span>
      <p>&nbsp;</p>
      <table width="543" height="160" border="1" align="center" bordercolor="#2CB0FA">
        <tr>
          <td width="124" height="32" class="registro">Entidad</td>
          <td width="403"><label>
            <input name="en" type="text" id="en" size="65" pattern="[a-zñ áéíóú]+" required />
          </label></td>
        </tr>
        <tr>
          <td height="31"><p class="registro">Beneficio</p>            </td>
          <td><input name="beneficio" type="text" id="beneficio" size="65" pattern="[a-zñ áéíóú]+" required /></td>
        </tr>
        <tr>
          <td height="41"><p class="registro">Contacto</p>            </td>
          <td><input name="contacto" type="text" id="contacto" size="65" pattern="[a-z&ntilde; &aacute;&eacute;&iacute;&oacute;&uacute; 0-9 ]+" required="required" /></td>
        </tr>
        <tr>
          <td height="44" class="registro">Fecha</td>
          <td><input name="fecha" type="date" id="fecha" size="65" pattern="[a-z&ntilde; &aacute;&eacute;&iacute;&oacute;&uacute;]+" required="required" /></td>
        </tr>
      </table>
      <p>
        <label>
        <center>
          <p>
        <center><input name="Submit" type="submit" class="registro" value="Enviar" /></center>
          
          <p>&nbsp;</p>
          <p align="center">&nbsp;</p>
      </form>
	<tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>

