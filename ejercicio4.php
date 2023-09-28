<html>
<head>
<title> Welcome!</title>
</head>
<body>
  
  <form method="post" action="ejercicio4-2.php">
    <p>Escribe lo que quieras</p>
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
   <p>Cual Fuente: 
   </p>
    <select id="select" name="select">
        <option value="Arial">Arial</option>
        <option value="Comic-Sans" selected>Comic-Sans</option>
        <option value="Calibri">Calibri</option>
    </select>
   <p>Escribe el Color: 
    <input id="color" type="color" name="color"/>
   </p>
   <p>
   <p>Escribe tamaño fuente: 
    <input id="tamaño" type="number" name="tamaño"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
   <p>Quieres guardar la info</p>
   <input type="checkbox" name="validar" id="validar">
  </form>
  <p>Anterior texto</p>
  <div>
    <?php
    if(isset($_COOKIE['textoGuardado'])){
      $textoGuardado= $_COOKIE['textoGuardado'];
      echo $textoGuardado;
    };
    
    ?>
  </div>
  <?php include "ejercicio2.php";?>
 </body>
</html>