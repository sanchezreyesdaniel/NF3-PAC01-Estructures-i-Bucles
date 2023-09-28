<html>
<head>
<title> Welcome!</title>
</head>
<body>
  <p>Esto es tu texto: </p>
  <?php
  $texto= $_POST["texto"];
  $color= $_POST["color"];
  $tamaño= $_POST["tamaño"];
  $select= $_POST["select"];
  $validar= $_POST["validar"];

  if($validar==true){
    setcookie('textoGuardado','<div style="color:' .$color . '; 
    font-family:' .$select . '; 
    font-size:' .$tamaño . 'px;">' .$texto . '</div>',time()+10);
  }

  echo '<div style="color:' .$color . '; 
  font-family:' .$select . '; 
  font-size:' .$tamaño . 'px;">' .$texto . '</div>';
 
  ?>
  <?php include "ejercicio2.php";?>
 </body>
 
</html>
