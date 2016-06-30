<?php
	 
	define('DB_SERVER'  , 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '3418');
	define('DB_DATABASE', 'local_services');
	
   	class connection {
			var $con;
   	   		public function __construct() {
   				$this->con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   		}
   }	
?>