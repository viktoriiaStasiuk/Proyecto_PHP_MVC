<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <title>Lista de Tours</title>
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <h1>Catalogue of our tours</h1>
  <h3>
    <a href="vista/registarse.user.php">Registrarse</a> <br/>
    <a href="vista/login.user.php">Login</a> 
  </h3>
<ul> 
    <?php

    foreach($datos as $item):
    ?>
      <article style="width: 380px;
                                background-color: rgb(205,219,241);
                                box-shadow: 0px 0px 12px 1px rgba(0,0,0,0.4);
                                margin: 50px;
                                padding: 50px;
                                display: inline-flex;
                                flex-direction: column; 
                                position: relative;
                                text-align: center;"> 

        <img src="<?= $item->getFoto(); ?>">
        <?= $item->getNombre(); ?><br/>
        <?= $item->getFecha_inicio(); ?><br/>
        <?= $item->getFecha_fin(); ?><br/>

      </article>

    <?php
    endforeach;
    ?>  
  </ul>

</body>
</html>