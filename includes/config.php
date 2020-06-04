<?php 
// DB credentials.
define('DB_HOST','sql203.epizy.com');
define('DB_USER','epiz_25863185');
define('DB_PASS','pwFiErkC8Dsmrbq');
define('DB_NAME','epiz_25863185_kamyadan');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>