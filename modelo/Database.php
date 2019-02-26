<?php

	class Database {

		private $dbHost = "localhost" ;
		private $dbUser = "root" ;
		private $dbPort = "3307";
		private $dbPass = "" ;
		private $dbName = "travel" ;

		private static $prp; //private static $res ;

		private static $pdo = null ; //private static $instancia = null ;	
		private static $instance =null; //private static $db ;

		private function __construct()  
		{
			$this->conectar() ;
		}
		
		/*public function __destruct() 
		{	
			
			Database::$db->close() ;
		}*/

		private function __clone() { }

		/*public function __wakeup() 
		{
			$this->conectar() ;
		}*/

		public static function getInstance() 
		{
			if (is_null(self::$instance)):
				self::$instance = new Database() ;
			endif ;
			
			return self::$instance ;
		}

		/*public function consulta($sql):bool 
		{
			
			self::$res = self::$db->query($sql) 
						  or die ("**Se ha producido un error de consulta en la base de datos.") ;

			if (is_object(self::$res)) return (self::$res->num_rows > 0) ;
			else
				return (self::$db->affected_rows > 0) ;
		}*/


		/*public function getTours($class="StdClass")
		{
			return self::$res->fetch_all($class) ;
		}*/

		/*private function conectar() 
		{
			
			self::$db = new mysqli($this->dbHost, 
								   $this->dbUser, 
								   $this->dbPass)
							or die("**Se ha producido un error en la conexión con el motor de bases de datos.") ;

			
			self::$db->select_db($this->dbName) ;

			self::$db->set_charset("utf8") ;
		}*/
		public function conectar()
		    {

		    try{
			self::$pdo = new PDO("mysql:host={$this->dbHost};port={$this->dbPort};dbname={$this->dbName};",
			$this->dbUser,
			$this->dbPass) ;

		    } catch (Exception $e)
		    
		      { die ("**ERROR: es imposible conectar con la base de datos."); }
	        } 

		public function doQuery($sql, $params=[]) 
		    { 
			self::$prp = self::$pdo->prepare($sql);

			$flg = self::$prp->execute($params);

			return($flg) && (self::$prp->rowCount() > 0);

            }
        public function getLastId()
            {
            	return self::$pdo->LastInsertId();
            }


		public function getRow($class="StdClass") 
		    { 
			if (self::$prp)
			   return self::$prp->fetchObject($class);
		    }



	}





