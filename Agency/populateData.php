<?php
	$db = new SQLite3('mainData.db') or die('Unable to open database');
	$query = <<<EOD
		CREATE TABLE IF NOT EXISTS data (serial STRING, itemname STRING, price STRING)
EOD;
	$db->exec($query) or die('Create db failed');
	$serial = $_POST['serial'];
	$name = $_POST['itemname'];
	$price = $_POST['price'];
	$query = <<<EOD
		INSERT INTO data VALUES ( '$serial', '$name', '$price')
EOD;
	$db->exec($query) or die("Unable to add data $serial");
	$result = $db->query('SELECT * FROM data') or die('Query failed');
	echo "<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">";
	echo "<table class = \"table\">";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Serial Number</th>";
	echo "<th>Item Name</th>";
	echo "<th>Price</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	while ($row = $result->fetchArray())
	{
		echo "<tr>";
		echo "<th scope = \"row\">";
  		echo "{$row['serial']}";
  		echo "</th>";
  		echo "<td>";
  		echo " {$row['itemname']}";
  		echo "</td>";
  		echo "<td>";
  		echo "${$row['price']}";
  		echo "</td>";
  		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";

?>