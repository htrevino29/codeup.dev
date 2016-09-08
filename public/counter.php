<?php

// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
    // Initialize an empty data array.
    $data = array();

    // Add data to be used in the html view.
    $data['message'] = 'Hello World!';

    // Return the completed data array.
    return $data;
}
// Call the pageController function and extract all the returned array as local variables.
extract(pageController());



$variable = isset($_GET['count']) ? $_GET['count'] : 0;


// Only use echo, conditionals, and loops anywhere within the HTML.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML</title>
    </head>
    <body>
        <?php echo $message; ?>
        <br>
        <h1>count <?= $variable ?> </h1>
        <br>
        <a href="counter.php?count=<?= $variable + 1 ?>" >UP</a>
        <br>
        <a href="counter.php?count=<?= $variable - 1 ?>" >DOWN</a>
    </body>
</html>