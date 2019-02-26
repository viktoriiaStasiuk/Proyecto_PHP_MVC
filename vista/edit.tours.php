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
  <h1>Editar tour</h1>

  <h3>
    <a href="../index.php">Volver atrás</a>
  </h3>

  <form action="" method="get"> 
    
    <input type="hidden" name="idTour" value="<?= $id ?>"> 
    <input type="hidden" name="mod" value="tours">
    <input type="hidden" name="ope" value="edit">
    
    <label for="nom">Nombre del tour:</label>
    <input id="nom" name="nom" type="text" value="<?= $nombre ?>" /> 
         <br/>
    <label for="fechai">Fecha del inicio:</label>
    <input id="fechai" name="fechai" type="date" value="<?= $fecha_inicio ?>" /> 
         <br/>
    <label for="fechaf">Fecha del fin:</label>
    <input id="fechaf" name="fechaf" type="date" value="<?= $fecha_fin ?>" /> 
         <br/>
    <button type="submit">Actualizar tour</button>
  </form>
</body>
</html>
<?php
}

?>