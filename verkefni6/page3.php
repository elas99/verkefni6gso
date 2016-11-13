<?php

	// Reynum að birta það sem er í $_POST sem og breytuna $firstname frá process.php
	var_dump($_POST);  // tómur array
	echo "Velkomin á þriðju vefsíðuna" . $firstname; // óskilgreind breyta 

	// Skýring:
	// HTML / HTTP is stateless, in other words, what you did / saw on the previous page, 
	// is completely disconnected with the current page. Except if you use something like 
	// GET / POST variables or sessions or cookies.
?>	

