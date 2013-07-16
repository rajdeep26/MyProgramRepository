<?php
	$username = "root";
	$password = "";
	$hostname = "localhost"; 

	function mysql_safe_string($value) 
	{
	$value = trim($value);
	if(empty($value))			return 'NULL';
	elseif(is_numeric($value))	return $value;
	else						return "'".mysql_real_escape_string($value)."'";
	}

	function mysql_safe_query($query) 
	{
	$args = array_slice(func_get_args(),1);
	$args = array_map('mysql_safe_string',$args);
	return mysql_query(vsprintf($query,$args));
	}

	function redirect($uri) {
	header('location:'.$uri);
	exit;
	}

	//connection to the database
	$dbhandle = mysql_connect($hostname, $username, $password)
	 or die("Unable to connect to MySQL");
	
	//select a database to work with
	$selected = mysql_select_db("my_program_repository",$dbhandle)
	  or die("Could not select examples");

?>