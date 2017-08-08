<?php
/* Our Factory!!!
   We'll conquer the world!
   By Mr CaT (c) Copyright 2017
*/
  class Fabric {

	  # Var $classname, with this we can connect and create objects
      private $classname;
 
	 # Here is our method
      public static function getClass($classname) {
		 # We reduce our $classname string to first connect object's file
          if(include(strtolower($classname) . ".php")) {
			 # The first letter of object must be BIG
              $classname = ucfirst($classname);
              return new $classname;
          }
          else die("Wrong file with its class!");
      }



  }