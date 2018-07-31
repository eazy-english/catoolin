<?php
	require_once 'vendor/autoload.php';
	// require_once 'lib/database.php';

	// use \Core\Router;
	# Factory creates object, Router

	$router = new Core\Router;
	// $connect = new Core\Connect;

	$router->cat();

	if($router) return true;

	else return false;
