<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


  $mod = $_GET["mod"]??"user"; //user //tours
  $ope = $_GET["ope"]??"index";  //log

  require_once "controlador/controller.$mod.php";

  $nme = "controller$mod";

   $cont = new $nme();

   if(method_exists($cont, $ope)) $cont->$ope();
   else
     die ("**Error: se ha producido un error de la aplicación"); 



?>