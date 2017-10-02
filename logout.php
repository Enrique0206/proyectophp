<?php 
require_once ("autoload.php");

try{
	session_destroy();
	header('location: index.php');

} catch (Exception $ex){
	die ('Error: ' . $ex->getMessage());
	}


?>