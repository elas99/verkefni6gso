<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
 <ul id="nav">
 <li><a href="index.php" <?php if ($currentPage == 'index.php') {
 echo 'id="here"';} ?>>Home</a></li>
 <li><a href="cookies.php" <?php if ($currentPage == 'cookies.php') {
 echo 'id="here"';} ?>>Cookies</a></li>
  <li><a href="json.php" <?php if ($currentPage == 'json.php') {
 echo 'id="here"';} ?>>JSON</a></li>
   <li><a href="csv.php" <?php if ($currentPage == 'csv.php') {
 echo 'id="here"';} ?>>CSV</a></li>
    <li><a href="sql.php" <?php if ($currentPage == 'sql.php') {
 echo 'id="here"';} ?>>SQL</a></li>

 </ul>