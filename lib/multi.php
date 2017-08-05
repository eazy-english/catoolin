<?php
 /* Multi class MAN! */

	class Multi {

		private $password;

		private $salt = "Cats rule, they are best!";
		
		private static $multi = null;

			public function __construct() {
				if(isset($password)) $this->password = $password;
			}

			public static function getMulti() {
				if(is_null(self::$multi)) self::$multi = new Multi();
				return self::$multi;
			}

			public function hashcat($password) {
				return md5(md5($this->password.$this->salt));
			}

           		 public function cat_start() {
                		return session_start();
           		 }

            		public function cat_stop() {
                		return session_destroy();
           		 }

			public function footer() {
				echo "<b>Powered by</b> <i>CATOOLIN</i>";
			}
	}
	
