<html>
<head>
	<title>Keep Count</title>
	<script src ="jquery-1.11.3.min.js"></script>
	<style type="text/css">
		div {
			background-color: gray;
			border-radius: 8px;
			border: 1px black solid;
			margin: 12px;
			padding: 3px;
		}
		h1 {
			text-align: center
		}

	</style>
</head>
<body>
	<h1>
		Keep Count and Last Visit
	</h1>
	<br> </br>
	<?php
		//read from a file, initialize count
		 $filename = "visit_count.txt";
		 $filename2 = "last_visit.txt";
		 if(file_exists($filename) && file_exists($filename2)) {
		 	$count = intval(file_get_contents($filename)) + 1;
		 	$lastvisit = file_get_contents($filename2);
		 	$currentvisit = date('m/d/Y @ H:i:s');
		 }
		 else {
		 	$count = 1;
		 	date_default_timezone_set('America/New_York');
		 	$lastvisit = "never";
		 	$currentvisit = date('m/d/Y == H:i:s');
		 }
		 //display the count
		 echo "<div>This page has been visited ";
		 echo $count;
		 echo " times. </div>";
		 echo "<div> Last visit was ";
		 echo $lastvisit;
		 echo "</div>";
		 //save our count to a file 
		 file_put_contents($filename, $count);
		 file_put_contents($filename2, $currentvisit);
	?>
</body>
</html>