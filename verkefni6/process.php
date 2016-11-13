<!DOCTYPE html>
<html>
<head>
	<title>form process</title>
	<meta charset="utf-8">
</head>
<body>
<?php

	
	print_r($_POST);
	// Sækjum gögnin úr POST fylkinu, setjum gildin í breytur 
	$mynd = $_POST['mynd'];
	$myndslod = $_POST['myndslod'];
	$textalysing = $_POST['textalysing'];
	$birtamynd = $_POST['birtamynd'];



	// birtum gildin (strengi)
	// tengjum saman streng við breytu við html element með punkt
	echo  "<p>" . "Þetta er mynd af " . $mynd. "</p>"; 
	if($birtamynd == 'ja')
	{
		echo '<img src="'.$myndslod.'" width="300px" height="300px">';
	}
	echo "<br>" . $textalysing;



?>
	<br>
	<a href="index.php">Til baka</a>
</body>
</html>