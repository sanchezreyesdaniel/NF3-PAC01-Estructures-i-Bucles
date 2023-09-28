<html>
<head>
<title> Welcome!</title>
</head>
<body>
<div style="">
<p> Welcome to my movie review site!<br/>
<?php
date_default_timezone_set("America/New_York");
echo "Hace dos dias fue: ";
echo date(" d")-2;
echo "<br>";
echo "El proximo mes es:";
echo date(" m")+1;
echo "<br>";
echo "Quedan: ";
$hoy=date("d");
$numDias=date("t");
$diasRestantes=$numDias-$hoy;
echo ($diasRestantes);
echo " para el proximos mes";
echo "<br>";


echo "Quedan: ";
echo 12- date(" n");
echo "  meses para el proximos año";
echo "<br>";
 include "ejercicio2.php";
?>
<br/>
</div>
</body>
</html>