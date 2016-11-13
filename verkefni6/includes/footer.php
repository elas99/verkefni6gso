<footer>
	<p>&nbsp; &copy;
	<?php
	$startYear = 2016;
	$thisYear = date('Y');
	if ($startYear == $thisYear) {
	 echo $startYear;
	} else {
	 echo "{$startYear}&ndash;{$thisYear}";
	}
	?>
	Elas Juk</p>
</footer>