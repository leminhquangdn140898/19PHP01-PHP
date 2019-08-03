<?php 
	include 'controller/controller.php';
	session_start(); 
	$controller = new Controller();
	$controller->handleRequest();
?>
