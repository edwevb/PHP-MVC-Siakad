<?php 

//BASEPATH
function url()
{
	return 'http://localhost/phpmvc/public';
}

//REDIRECTPATH
function redirect($uri)
{
	return header('location:'.url().$uri);
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test');