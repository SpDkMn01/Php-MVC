<?php 

	/*
	 * El frontend controller se encarga de
	 * configurar nuestra aplicacion
	 */

	require 'config.php';
	require 'helpers.php';
	
	controller($_GET['url']);