<?php 
	$dots = $_POST['dots'];
	$filename = "saved.txt";
	file_put_contents($filename, "");
	file_put_contents($filename, $dots);
?>


