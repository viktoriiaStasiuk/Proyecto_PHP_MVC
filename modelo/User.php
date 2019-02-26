<?php
	require_once "Database.php" ;

	class User {

		private $idUsuario ;
		private $usuario ;
		private $nombre ;
		private $apellidos ;
		private $email ;
		private $password ;


		public function __construct() 
		{
		}

        public function setUsuario($usr)   { $this->usuario = $usr ;}
		public function setNombre($nom)    { $this->nombre = $nom ;}
		public function setApellidos($ape) { $this->apellidos = $ape ;}
		public function setEmail($mail)    {$this->email = $mail ;}
		public function setPassword($pwd)  { $this->password = $pwd ;}

		public function getIdUsuario()   { return $this->idUsuario; }
		public function getUsuario()     { return $this->usuario;}
  	    public function getNombre()      { return $this->nombre; }
  	    public function getApellidos()   { return $this->apellidos; }
  	    public function getEmail()       { return $this->email;}
		public function getPassword()    { return $this->password;}

		public function reg() {
  		$bd = Database::getInstance();
  		$bd->doQuery("INSERT INTO usuario(usuario, email, password, nombre, apellidos) VALUES (:usr, :mail, :pwd, :nom, :ape);",
  	                  [":usr"  => $this->usuario,
  	                   ":mail" => $this->email,
  	                   ":pwd"  => $this->password,
  	                   ":nom"  => $this->nombre,
                       ":ape"  => $this->apellidos]
                       );
  		$this->idUsuario = $bd->getLastId();
  	}

		public function __toString()
		{
			return "El ususario: $this->usuario<br/>" ;
		}

	}








