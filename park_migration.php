<?php
require('config.php');
require('db_connect.php');

$dbc->exec('DROP TABLE IF EXISTS national_parks');
$dbc->exec(
	'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50),
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres double,
    description TEXT,
    PRIMARY KEY (id)
)'
);















 ?>