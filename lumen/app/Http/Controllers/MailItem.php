<?php 

	class MailItem{
		public static $nombre;
		public static $apellido;
		public static $email;
		public static $mensaje;

		function __construct($_nombre, $_apellido, $_email, $_mensaje){
			self::$nombre = $_nombre;
			self::$apellido = $_apellido;
			self::$email = $_email;
			self::$mensaje = $_mensaje;

			print "Object created successfully: " . get_class($this);
		}

		public function emailValidator(){

		}


	}
