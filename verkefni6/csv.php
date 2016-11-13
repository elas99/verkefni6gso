<?php
/* how to extract the values from a CSV file into a multidimensional associative array using fopen() and fgetcsv().*/

/* CSV skráin: 
			There should be no space after the comma. If you add a space, it’s considered to be the first character of a data field. 
			Each line in a CSV file must have the same number of items. 
*/
$file = fopen('bobbi.csv', 'r');  // r fyrir lesréttindi

// get the first row from the CSV file to use as titles
// fgetcsv() gets the current line from a CSV file and converts it into an array
// 
$titles = fgetcsv($file);

// initialize an empty array for the values that will be extracted from the CSV data
$users = [];

// fgetcsv() moves to the next line

/*
The conditional statement uses the count() method to find out how many elements are in
the array. If there’s only one, and the value of the first element is null, the continue keyword
returns to the top of the loop without executing the next line.
*/
while (($data = fgetcsv($file)) !== false) {
    
    // fgetcsv() returns an array with a single null value if it encounters a blank line
    // annars gætum við fengið meldingu í array_combine() ef null element.
    if (count($data) == 1 && is_null($data[0])) {
        continue;
    }
    // array_combine() creates an associative array using
    // the first array as array keys and the second as values
    // $users[] er multidimensional array, sem bætir við einu fylki í einu í while lykkjunni.
    $users[] = array_combine($titles, $data);

}
fclose($file);
include './includes/title.php';
 include './includes/random_image.php'; 
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Verkefni 6 <?php echo "&#8212; {$title}"; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="normalize.min.css">
        <link rel="stylesheet" href="main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <?php  
    $image = "{users[0]['mynd']}";
        echo "<img src='" . $image . "'>";
?>
<a href="index.php">Til baka á aðalsíðuna</a>

    </body>