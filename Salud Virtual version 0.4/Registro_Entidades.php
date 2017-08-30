<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Registro</title>
<link rel="stylesheet" href="Estilos.css" type="text/css"/>
<style type="text/css">
<!--
.Estilo1 {color: #0066FF}
-->
</style>
</head>

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
    <td bgcolor="#FFFFFF"><form id="form2" name="form2" method="post" action="Registro_Entidades1.php">
        <p align="center"><img src="img_registro.JPG" width="175" height="169" /></p>
        <p align="center" class="titulo1">&iexcl;Registrate!</p>
        <table width="559" height="623" border="0" align="center">
          <tr>
            <td height="68"><center>
              <span class="registro">Nit</span>
            </center> 
              <label>
              <center><input name="Nit" type="text" id="Nit" size="35" pattern="[0-9]+" required /></center>
            </label>
              <center>
                </center>              <label>
              <center>
              </center>
              </label></td>
          </tr>
          <tr>
            <td height="106" class="registro"><center>
              <p class="Estilo1">Nombre Entidad </p>
              <p>
                <label></label>
                <label>
                <input name="NombreEntidad" type="text" id="NombreEntidad" size="76" pattern="[a-zñ áéíóú]+" required />
                </label>
              </p>
            </center>
            <p>
              <label></label>
            </p></td>
          </tr>
          <tr>
            <td height="113" class="registro"><center>
              <p class="Estilo1">Telefono</p>
            </center> </p>
            <center><input name="Telefono" type="text" id="Telefono" size="76" pattern="[0-9]+" required />
            </center>
            <p>
              <label></label>
            </p></td>
          </tr>
          <tr>
            <td height="94" class="registro"><p align="center" class="Estilo1">Email</p>
              <p align="center">
                <label>
                <input name="Email" type="email" id="Email" size="76" />
                </label>
              </p>
              <p>
              <center>
              </center>
            </p></td>
          </tr>
          <tr>
            <td height="94" class="registro"><p align="center" class="Estilo1">Contrase&ntilde;a</p>
              <p align="center" class="Estilo1">
                <input name="Contrasena" type="password" id="Contrasena" size="76" />
              </p>
            <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td height="106" class="registro"><p align="center" class="Estilo1">Confirmar Contrase&ntilde;a </p>
            <p align="center">
              <input name="Confirmarcontrasena" type="password" id="Confirmarcontrasena" size="76" />
            </p>
            <p>&nbsp;</p></td>
          </tr>
        </table>
        <p align="center">
          <input name="Submit" type="submit" class="registro" value="Continuar" />
        </p>
        <p align="center">&nbsp;</p>
        <p align="center"><span class="parrafo1"><a href="Registro.php"></a></span></p>
        <p align="center">&nbsp;</p>
        </form>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p></td></tr>
  <tr bordercolor="0">
    <td><iframe src="Footer.html" scrolling="no" width="1800" height="300" frameborder="0"/></iframe></td>
  </tr>
</table>
</body>
</html>
