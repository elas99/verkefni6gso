<?php         
$json = file_get_contents("./myndir.json");
// Breytum JSON streng í php assoiative array.
$colors = json_decode($json,true);
print_r($colors);
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>JSON Dæmi</title>
    
<body>

    <div>
        <?php      
          
          foreach ($colors as $key => $value) 
          {
             echo " ". "<img src=\"{$value}\">" . $key . "<br>"; 
             
          }



        ?>  
        <br><br>  
    </div>
<br>
<form action="addijson.php" method="post">
        <label>Myndheiti: </label>
        <input type="text" name="player" id="myndheiti" required ><br>
        
        <label>Myndslóð: </label>
        <input type="text" name="score" id="myndslod" required ><br>

        <input type="submit">
    </form>
<a href="index.php">Til baka á aðalsíðuna</a>
</body>
</html>