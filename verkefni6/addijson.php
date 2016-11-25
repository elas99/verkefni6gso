<?php

$contents = file_get_contents('myndir.json');
 
//Decode the JSON data into a PHP array.
$contentsDecoded = json_decode($contents, true);

$myndslod = $_POST['myndheiti'];
$imagePath = $_POST['myndslod']; 	


//Modify the counter variable.
$contentsDecoded[];
 
//Encode the array back into a JSON string.
$json = json_encode($contentsDecoded);

file_put_contents('myndir.json', $json);

?>