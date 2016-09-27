<?php
	$db = new SQLite3('serialNums.db') or die('Unable to open database');
	$query = <<<EOD
		CREATE TABLE IF NOT EXISTS cart (serial STRING, itemname STRING, price STRING)
EOD;
	$db->exec($query) or die('Create db failed');
	$result = $db->query('SELECT * FROM cart') or die('Query failed');
	$total = 0.0;
	while($row = $result->fetchArray()) 
	{
		$cur = floatval($row['price']);
		$total = $total + $cur;
	}

	echo "$total";

?>