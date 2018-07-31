<?php
namespace Lib;
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

				$modelname = $controllername . "Model";

				$controllername = $controllername . "Controller";

				# With this we'll include all model files

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

				# If Controller doesn't exist, we, return false, error 404

				else {
					# First require it

					include_once('controller/404.php');

					# And call its object

					$error = new Error404();

					return false;
				}

				# Call our "Controller" object

				$controller = new $controllername;

				$method = $methodname;

				# Also with its method

				# If a method in our controller exists, we'll call it

				if(method_exists($controller, $method)) {

					return $result = $controller->$method();

				}

				# Else, if a method doesn't exist, we return false, 404 Error page

				else {
					# Requiring...

					include_once('controller/404.php');

					# Calling the object...

					$error = new Error404();

					# False

					return false;
				}
			}
	}
