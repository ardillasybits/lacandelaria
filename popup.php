<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
//include ("conectar.php");
include ("../syscand/conectar.php");
$sqlActual = "SELECT * FROM popups WHERE activo=1";
$queryActual = mysql_query($sqlActual);
$resultadoActual = mysql_fetch_array($queryActual);
?>
<title><?php echo $resultadoActual[titulo] ?> - La Candelaria</title>
</head>

<body bgcolor='black'>
<img src="<?php echo $resultadoActual[url] ?>" width="730" height="460" />
</body>
</html>
