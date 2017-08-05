<?php
	require_once 'lib/router.php';
	require_once 'lib/database.php';

	# Including connect to DB

	$db = new Database("dbhost", "mydbuser", "mypass", "mydbname", "dbcharset");

	$router = Router::cat();

	if($router) return true;

	else return false;
