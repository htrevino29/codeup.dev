<?php 

    require '../config.php';
    require_once '../db_connect.php';

    function pageController($dbc){  
        if(!empty($_POST)){
            $query= "INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)";
            $stmt = $dbc->prepare($query);
            $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
            $stmt->bindValue(':location',  $_POST['location'],  PDO::PARAM_STR);
            $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
            $stmt->bindValue(':area_in_acres',  $_POST['area_in_acres'],  PDO::PARAM_STR);
            $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

            $stmt->execute();
        }      
    //    ternary statement reads GET request                
        $offset = (!empty($_GET)) ? $_GET["offset"] : 0;        // GET request NOT empty? if true, set it to offset => value. If false, set it to 0
    //    $stmt variable created to contain instance of PDOStatement representing the results of query
        $query= ("SELECT * FROM national_parks");
        $stmt = $dbc->prepare($query);   // query() method iterates through national_parks and retrieves metadata
        $stmt->execute();
        $query2=('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset);
        $stmt2 = $dbc->prepare($query2);
        $stmt2->execute();
        $parks = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    //    return statement returns parks key parkCount key
        return [
        //    retrieves info from national_parks and limits to 4 per page 
            'parks' => $parks,  // concats the offset amount
        //    parkCount key will count total number of parks in table
            'parkCount' => $stmt->rowCount()
        ];
    };

    extract(pageController($dbc));    // extracts pageController and passes $dbc from db_connect.php into it
    
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <h1>'Merica</h1>
        <table class="table-striped table table-bordered">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Date Established</th>
                <th>Area In Acres</th>
                <th>Description</th>
            </tr>
            <!-- foreach statement iterates through parks variable created from key in pageController extraction -->
             <?php foreach ($parks as $park): ?>
                <tr>
                    <td><?= $park['name']; ?></td>
                    <td><?= $park['location']; ?></td>
                    <td><?= $park['date_established']; ?></td>
                    <td><?= $park['area_in_acres']; ?></td>
                    <td><?= $park['description']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php 
            $page = 1;
        //    for loop tied to $offset and will determine the first park on each page 
             for($i = 0; $i <= $parkCount; $i += 4):        // for loop sets parameters between 0 - length of national_park array
         ?>
        <!-- offset key is created here. anchor tag placed within for loop so as to create one for every 4 parks -->
            <a href="national_parks.php?offset=<?=$i?>"> <div class="btn btn-primary"> <?=$page++?></div></a>     
        <?php endfor; ?>
        <br>
        <h1>ADD PARK</h1>
        <form method="post">
            <div class="form-group row">
              <label class="col-xs-2 col-form-label">Name</label>
              <div class="col-xs-10">
                <input class="form-control"  id="example-text-input" name='name'>
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-xs-2 col-form-label" >Location</label>
              <div class="col-xs-10">
                <input class="form-control"   id="example-search-input" name='location'>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xs-2 col-form-label">Date Established<br>(YYYY-MM-DD) </label>
              <div class="col-xs-10">
                <input class="form-control"   id="example-email-input" name='date_established'>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xs-2 col-form-label">Area in acres</label>
              <div class="col-xs-10">
                <input class="form-control"   id="example-url-input" name='area_in_acres'>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xs-2 col-form-label">Description</label>
              <div class="col-xs-10">
                <input class="form-control"  id="example-tel-input" name='description'>
              </div>
            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>