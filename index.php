<?php
	require_once 'lib/fabric.php';
	require_once 'lib/database.php';

	# Including connect to DB

	$db = new Database("dbhost", "mydbuser", "mypass", "mydbname", "dbcharset");
	# Factory creates object, Router

	$router = Fabric::getClass("Router");

	$router->cat();
	
	# Factory creates Connect Object

	$connect = Fabric::getClass("Connect");

	if($router) return true;

	else return false;
