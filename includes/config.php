<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'AJ');
define('DB_PASSWORD', 'ashwathi');
define('DB_DATABASE', 'ireu_realestate');


//create connection
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$db->set_charset("utf8");

//check connection
if (!$db) {
  die('connection error ' . mysqli_connect_errno());
}
