<?php

require_once "modelo/Tours.php";

class controllerTours{


  public function __constant()
  { 

  }

  public function index() {

  if(empty($_SESSION)){
    session_unset();
    echo "<p>No hay sesión</p>";
  } else {
    $datos = Tours::getAllTours();
    require_once "vista/index.tours.php"; 
    }
  }
  public function create(){

   session_start();

   if(empty($_SESSION)){
    session_unset();
    echo "<p>No hay sesión</p>";

  } else {
  	if (isset($_GET["nom"])):

        $trip = new Tours();
        $trip->setNombre($_GET["nom"]);
        $trip->setFecha_inicio($_GET["fechai"]);
        $trip->setFecha_fin($_GET["fechaf"]);
        $trip->insert();

        $this->index();

  	else:

  		require_once "vista/crear.tours.php";

  	endif;
}
  }
  
  public function edit()
  {
    session_start();
  if(empty($_SESSION)){
    session_unset();
    echo "<p>No hay sesión</p>";

  } else {
    $id = $_GET["idTour"]??"";

    if(!empty($id)): 
      $trip = Tours::getBoard($_GET["idTour"]);

      if(isset($_GET["nom"])): 
       $trip->setNombre($_GET["nom"]); 
       $trip->setFecha_inicio($_GET["fechai"]);
       $trip->setFecha_fin($_GET["fechaf"]);
       $trip->edit(); 

       $this->index();

      else:
        $nombre = $trip->getNombre(); 
        require_once "vista/edit.tours.php"; 
      endif;

    else:

      $this->index();
    endif;
    }
  }

  public function delete()
  {
    session_start();
  if(empty($_SESSION)){
    session_unset();
    echo "<p>No hay sesión</p>";

  } else {
    if (isset($_GET["idTour"]))

      Tours::deleteBoard($_GET["idTour"]);

      $this->index(); 
  }
}

}


?>