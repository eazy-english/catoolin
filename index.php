<?php
	require_once 'lib/fabric.php';
	require_once 'lib/database.php';

	# Factory creates object, Router

	$router = Fabric::get("Router");

	$router->cat();

	if($router) return true;

	else return false;
