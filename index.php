<?php
	require_once 'lib/router.php';

	$router = Router::cat();

	if($router) return true;
	else return false;