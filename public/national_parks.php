

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>National Parks</title>
	</head>
	<body>
		<div CLASS='container'>
			<h1>'merica!</h1>
	

		<?php 

			require '../config.php';
			require_once '../db_connect.php';

		function getParks($dbc){
			$stm = $dbc->query("SELECT * FROM national_parks;");
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
		</div>
	<script src="/js/bootstrap.min.js"></script>
	</body>
</html>