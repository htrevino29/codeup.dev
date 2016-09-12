<?php


// controllers listen for requests
// controllers call any logic that needs to run
// to provide the appropriate response




// Require or include statements are allowed here. All other code goes in the pageController function.

// function pageController()
// {
 
// }
// Call the pageController function and extract all the returned array as local variables.
// extract(pageController());

$variable = isset($_GET['count']) ? $_GET['count'] : 0;

// ***************** new way ***********************
// if(inputHas('counter')){
//     $data['counter'] = inputGet('counter');
// } else {
//     $data['counter'] = 0;
// }
//**************************************************

// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <br>
        <h1>count <?= $variable ?> </h1>
        <br>
        <a href="counter.php?count=<?= $variable + 1 ?>" >UP</a>
        <br>
        <a href="counter.php?count=<?= $variable - 1 ?>" >DOWN</a>
    </body>
</html>