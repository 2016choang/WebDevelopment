<html>
<head>
	<title>View Data</title>
</head>
<body>
	<?php
		$db = new SQLite3('perf.db');
		$result = $db-> query('SELECT * FROM webstudents');
		while ($row = $result-> fetchArray())
		{
			var_dump($row);
			echo ("<br><br>");
		}

	?> 
</body>
</html>