<?php  

// Get new instance of PDO object
$dbc = new PDO(DB_HOST.';'.DB_NAME,DB_USER,DB_PASS);

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


?>