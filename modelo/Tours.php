<?php

  require_once "Database.php";

  class Tours{

  	private $idTour;
  	private $nombre;

    private $fecha_inicio;
    private $fecha_fin;
    private $foto;

  	public function __construct() 
  	{

  	}

  	public function setNombre($nom)          { $this->nombre = $nom; }
    public function setFecha_inicio($fechai) { $this->fecha_inicio = $fechai; }
    public function setFecha_fin($fechaf)    { $this->fecha_fin = $fechaf; }
    public function setFoto($fot)            { $this->foto = $fot; }

  	public function getIdTour()       { return $this->idTour; }
  	public function getNombre()       { return $this->nombre; }
    public function getFecha_inicio() { return $this->fecha_inicio; }
    public function getFecha_fin()    { return $this->fecha_fin; }
    public function getFoto()         { return $this->foto; }

  	public function insert()
  	{
  		$bd = Database::getInstance();
  		$bd->doQuery("INSERT INTO tours(nombre, fecha_inicio, fecha_fin) VALUES (:nom, :fechai, :fechaf) ;",
  	                  [":nom"    => $this->nombre,
                       ":fechai" => $this->fecha_inicio,
                       ":fechaf" => $this->fecha_fin]);
  		$this->idTour = $bd->getLastId();
  	}

  	public function edit()
  	{
      $bd = Database::getInstance();
      $bd->doQuery("UPDATE tours SET nombre=:nom, fecha_inicio=:fechai, fecha_fin=:fechaf, foto=:fot WHERE idTour=:idt ;",
      	           [":idt"    => $this->idTour,
      	            ":nom"    => $this->nombre,
                    ":fechai" => $this->fecha_inicio,
                    ":fechaf" => $this->fecha_fin,
                    ":fot"    => $this->foto]);
  	}

  	public function delete()
  	{ 
      $bd = Database::getInstance();
      $bd->doQuery("DELETE FROM tours WHERE idTour=:idt ;",
      	           [":idt" => $this->idTour]);
  	}

  	public static function getAllTours()
  	{ 
      $bd = Database::getInstance();
      $bd->doQuery("SELECT * FROM tours ;");

      $datos = []; 

      while ($item = $bd->getRow("Tours")):
      	array_push($datos,$item);

      endwhile;

      return $datos;
  	}

    public static function getBoard($id)
    {
      $bd = Database::getInstance();
      $bd->doQuery("SELECT * FROM tours WHERE idTour=:idt ;",
                   [":idt" => $id]);

      return $bd->getRow("Tours"); 
    }

  	public static function deleteBoard($id)
  	{ 
      $bd = Database::getInstance();
      $bd->doQuery("DELETE FROM tours WHERE idTour=:idt ;",
      	           [":idt" => $id]);
  	}

  	  public function __toString()
  	  {
  		return "[ {$this->idTour} ]:: {$this->nombre}<br/>";
  	  }

  }

?>