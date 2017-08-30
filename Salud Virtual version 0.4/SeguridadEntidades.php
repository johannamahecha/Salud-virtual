<?php
session_start();

echo "Usuario Actual:" ;
echo $_SESSION['Email'];
if ($_SESSION['estado']!="1")
{
header ("Location: Salir.php");
}
?>