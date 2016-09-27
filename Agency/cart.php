<?php
	$db = new SQLite3('serialNums.db') or die('Unable to open database');
	$result = $db->query('SELECT * FROM cart') or die('Query failed');
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