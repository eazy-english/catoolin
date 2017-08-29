<?php
	require_once 'lib/fabric.php';
	require_once 'lib/database.php';

	# Factory creates object, Router

	$router = Fabric::getClass("Router");

	$router->cat();

	if($router) return true;

	else return false;
