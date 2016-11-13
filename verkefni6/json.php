<?php

$url ="http://tsuts.tskoli.is/2t/0405994799/gso/verkefni6/myndir.json";          
$json = file_get_contents($url);
// Breytum JSON streng í php assoiative array.
$colors = json_decode($json,true);
print_r($colors);
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>JSON sýnidæmi</title>
    
<body>

    <div>
        <?php      
          
          foreach ($colors as $key => $value) 
          {
             echo " ". "<img src=\"{$value}\">"; 
             
          }
          echo" <br><br>";
          echo"---Hér kemur fylkið-------   <br>";
          foreach ($colors as $key => $value) 
          {
             echo " ". $key . ": " . $value . " ";
          }
        ?>    
    </div>
<br>
<form action="insert.php" method="post">
        <label>Myndheiti: </label>
        <input type="text" name="player" required ><br>
        
        <label>Myndslóð: </label>
        <input type="text" name="score" required ><br>

        <input type="submit">
    </form>
<a href="index.php">Til baka á aðalsíðuna</a>
</body>
</html>