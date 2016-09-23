<?php

	require('config.php');
	require_once('db_connect.php');


	//Create functions to call pageController use MVC

	$stm = $dbc->query("SELECT * FROM national_parks;");

	echo "number of cols ".$stm->columnCount()."<br>";
	echo "number of rows ".$stm->rowCount()."<br>";


// function getParks($stm){

// 	$rows = $stm->fetchALL(PDO::FETCH_NUM);
// 	foreach($rows as $row){
// 		print_r($row);
// 		//echo $row['name'];
// 		echo "<br>";
// 	}	
// }

function getParks($dbc){
	$stm = $dbc->query("SELECT * FROM national parks;");
	$row = $stm->fetchALL(PDO::FETCH_ASSOC);
	return $rows;
}

function getLocation($dbc){
	$stm = $dbc->query("SELECT location FROM national_parks;");
	$rows = $stm->fetchALL(PDO::FETCH_ASSOC);
	return $rows;
}
	$parks = getParks($dbc);

	foreach($parks as $park){
		   // print_r($park);
        echo $park['name']. " --- ".$park['location']. " --- ".$park['date_established']. " --- ".$park['area_in_acres'];
        echo "<br>";
    }


?>