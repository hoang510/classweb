<?php
	define('mysqlinfo', array(
		'host'=>'localhost',
		'user'=>'root',
		'password'=>'',
		'db_name'=>'MyClassBlog'
	));
	$mysql = new MySQLi(mysqlinfo['host'], mysqlinfo['user'], mysqlinfo['password'], mysqlinfo['db_name']);

	if ($mysql->connect_error)
	{
		die('Database connect error'.$mysql->connect_error);
	}
?>