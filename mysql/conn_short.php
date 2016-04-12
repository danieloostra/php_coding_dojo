<?php

//Just the database credentials without the helper functions.

/*--------------------BEGINNING OF THE CONNECTION PROCESS------------------*/
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'mydb'); //make sure to set your database
//connect to database host
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
/*-------------------------END OF CONNECTION PROCESS!---------------------*/

?>