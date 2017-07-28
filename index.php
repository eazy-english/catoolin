<?php
	require_once 'lib/router.php';
	require_once 'lib/database.php';

	# Including connect to DB
	
	$db = new Database("localhost", "root", "jojo", "cat", "utf8");

	# Getting all rows from table `users`

	$for = $db->getAll("users");

	# Fetching got rows

	foreach($for->fetch() as $r) {
	
	   echo $r , "<br />";
	   
	}
	
	$router = Router::cat();

	if($router) return true;

	else return false;