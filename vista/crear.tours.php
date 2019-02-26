<?php

if(empty($_SESSION)){
  session_unset();

echo "<p>No hay sesión</p>";

} else {

  ?>
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <title>Lista de Tours</title>
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <h1>Crear nuevo tour</h1>

  <h3>
    <a href="../index.php">Volver atrás</a>
  </h3>

  <form action="" method="get">
    <input type="hidden" name="mod" value="tours">
    <input type="hidden" name="ope" value="create">
    
    <label for="nom">Nombre del tour:</label>
    <input id="nom" name="nom" type="text" required />
         <br/>
    <label for="fechai">Fecha del inicio:</label>
    <input id="fechai" name="fechai" type="date" /> 
         <br/>
    <label for="fechaf">Fecha del fin:</label>
    <input id="fechaf" name="fechaf" type="date" /> 
         <br/>
    <button type="submit">Crear tour</button>
  </form>

</body>
</html>
<?php
}

?>