<?php

//Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'somePa55word';
$dbname = 'salamanders';

//1. Create database query
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//2. Perform database query

//3. Use returned data (if any)

//4. Release returned data

//5. Close database connection
mysqli_close($connection);