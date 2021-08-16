<?php
 session_start();
 //connect to database
 $conn =mysqli_connect("localhost","stanley","sta78726486","blog-simple");
 
 if(!$conn){
	 die("Error connecting to the database: ".mysqli_connect_error());
 }
 // coming soon

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/blog-simple/');
?>