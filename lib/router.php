<?php

	/*	                   __            
	  ____ ___  __ __ / /_ ___   ____
	 / __// _ \/ // // __// -_) / __/
	/_/   \___/\_,_/ \__/ \__/ /_/   
                                 
                                 */

	/* Router class by Mr CaT ) ) )

	Created in easy form, for easy understanding



	Routing, do it without problem! 4 Fun!

	(c) Copyright by Mr C47 */
	
	class Router {

			# Our static method will be "cat"

			public function cat() {
				# Getting the url

				$url = $_SERVER["REQUEST_URI"];

				# Explode it with slash "/"

				$route = explode("/", $url);
				
				# Our controller name will depend on routes, string after the address

				$controllername = "";

				if(isset($route[1])) $controllername = $route[1];

				else echo "";

				$controllername = $controllername . "Controller";
				
				# With this we'll include all model files

				$modelname = $controllername . "Model";

				# Our methods 'll  be 'method' and method name

				$methodname = "";

				if(isset($route[2])) $methodname = $route[2];

				else echo "";
				$methodname = "method" . $methodname;

				# Each model file must have the model object name, but with lil' letters

				$modelfile = strtolower($modelname) . ".php";

				$modelpath = "model/" . $modelfile;

				if(file_exists($modelpath)) {

					include_once($modelpath);

				}

				# Each controller file must have the controller object name, but with lil' letters

				$controllerfile = strtolower($controllername) . ".php";

				$controllerpath = "controller/" . $controllerfile;

				if(file_exists($controllerpath)) {

					include_once($controllerpath);

				}
				else return false;

				# Call our "Controller" object

				$controller = new $controllername;

				$method = $methodname;

				# Also with its method

				$result = $controller->$method();

				if($result != null) echo "FUCK!";

				else return false;
			}
	}