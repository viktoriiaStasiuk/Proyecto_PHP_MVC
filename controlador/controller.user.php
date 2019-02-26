<?php

require_once "modelo/User.php";
require_once "modelo/Tours.php";
require_once "modelo/Database.php";

class controllerUser{


  public function __constant()
  { 

  }

  public function index() 
  {

    $datos = Tours::getAllTours();

    require_once "vista/index.tour.php"; 
  }

  public function log() 
  {
  
       if(isset($_GET['usuario']) && isset($_GET['password'])){


        $bd = Database::getInstance();
        $usuario=$_GET["usuario"];
        $password=$_GET["password"];
        $bd->doQuery("SELECT * FROM usuario WHERE usuario = :usuario AND password = :password;",
                      [":usuario"  => $usuario,
                       ":password" => $password]);

        $rsl=$bd->getRow();
        session_start();
        if ($rsl == true){
          $_SESSION["usuario"] = $usuario;
          $this->indexTour(); 

          } else {        
            
            echo "<p style='color:red; font-size:15px; position:relative; padding:60px; margin:70px; width:550px;'>Usuario o contraseña incorrecto</p>";
            header("location:vista/login.user.php");

          } 
        }
        } 

  public function indexTour() {
    $datos = Tours::getAllTours();

    require_once "vista/index.tours.php"; 
  }

public function reg() {
    if (isset($_GET["nom"])):

        $us = new User();
        $us->setNombre($_GET["nom"]);
        $us->setApellidos($_GET["ape"]);
        $us->setUsuario($_GET["usr"]);
        $us->setPassword($_GET["pwd"]);
        $us->setEmail($_GET["mail"]);
        $us->reg();

        $this->index(); 

    else:

      require_once "vista/registarse.user.php";

    endif;
}

}


?>