<html>
<head>
<title> Welcome!</title>
</head>
<body>
<div style="text-align: center">
<p> En que estacion estamos?<br/>
<?php
date_default_timezone_set("America/New_York");
echo "Estamos en: ";



$dia=date("z");

if($dia>80 and $dia<172){
    echo"Primavera";
}
if($dia>172 and $dia<262){
    echo"Verano";
}
if($dia>262 and $dia<354){
    echo"Otoño";
}
if($dia>354 and $dia<365){
    echo"Invierno";
}
if($dia>0 and $dia<80){
    echo"Invierno";
}
include "ejercicio2.php";


?>
<br/>
</div>
</body>
</html>