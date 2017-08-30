<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Salud Virtual- Registro</title>
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
    <td bgcolor="#FFFFFF"><form id="form2" name="form2" method="post" action="Registro1.php">
        <p align="center"><img src="img_registro.JPG" width="175" height="169" /></p>
        <p align="center" class="titulo1">&iexcl;Registrate!</p>
        <table width="523" height="806" border="0" align="center">
          <tr>
            <td width="262" height="68"><center>
              <span class="registro">Nombre:</span>
            </center> 
              <label>
              <center><input name="Nombre" type="text" id="Nombre" size="35" pattern="[a-zñ áéíóú A-ZÑ]+" required /></center>
            </label></td>
            <td width="251"><center>
              <span class="registro">Apellidos:</span>
            </center> 
              <label>
              <center><input name="Apellidos" type="text" id="Apellidos" size="35" pattern="[a-zñ áéíóú A-ZÑ]+" required /> 
              </center>
            </label></td>
          </tr>
          <tr>
            <td colspan="2" class="registro"><center>
              <p>Tipo de C&aacute;ncer:</p>
              <p>
                <label></label>
                <label>
                <input name="Tipocancer" type="text" id="Tipocancer" size="76" pattern="[a-zñ áéíóú A-ZÑ]+" required />
                </label>
              </p>
            </center>
            <p>
              <label></label>
            </p></td>
          </tr>
          <tr>
            <td height="113" colspan="2" class="registro"><center>
              <p>Telefono:</p>
            </center> </p>
            <center>
              <label>
              <input name="Telefono" type="text" id="Telefono" size="76" pattern="[0-9]+" required  />
              </label>
            </center>
            <p>
              <label></label>
            </p></td>
          </tr>
          <tr>
            <td height="94" colspan="2" class="registro"><p align="center">Identificaci&oacute;n</p>
              <p align="center">
                <label></label>
                <input name="Identificacion" type="text" id="Identificacion" size="76" pattern="[0-9]+" required="required" />
              </p>
              <p>
              <center>
              </center>
            </p></td>
          </tr>
          <tr>
            <td height="73" colspan="2" class="registro"><p><center>
              Contrase&ntilde;a:
            </center></p>
              <p>
                <center>
                  <input name="Contrasena" type="password" id="Contrasena" size="76" />
                </center>
</p>
            <p>
              <label>
              <center>
              </center>
              </label>
            </p></td>
          </tr>
          <tr>
            <td height="159" colspan="2" class="registro"><center>
               <p>Confirmar contrase&ntilde;a:</p>
               <p>
                 <label></label>
                 <input name="Confirmarcontrasena" type="password" id="Confirmarcontrasena" size="76" />
               </p>
            </center>            </td>
          </tr>
          <tr>
            <td height="50" colspan="2" class="registro"><center>
              <p>Fecha de nacimiento: </p>
              <p>
                <input name="Fechanacimiento" type="date" id="Fechanacimiento" />
</p>
            </center>
              <center>
            </center></td>
          </tr>
          <tr>
            <td height="80" colspan="2" class="registro"><p align="center">Genero </p>
              <p align="center">
                <select name="Genero" id="Genero">
                  <option value="Femenino">Femenino</option>
                  <option value="Masculino">Masculino</option>
                </select>
</p></td>
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
