
<?php
include './includes/title.php';
echo "<title>Verkefni 4 '{$title}'</title>";

if($_GET['id'] == 1) {
  
  echo "<img src='includes/images/mynd1stor.jpg'>" . "<br>" . "Þetta er mynd af flottum bíl";

}
if($_GET['id'] == 2) {
  echo "<img src='includes/images/mynd2stor.jpg'>" . "<br>" . "Þetta er mynd af flottari klukku";
}
require './includes/footer.php';
?>
<a href="index.php">Til baka<a>