<?php
	$db = new SQLite3('saveData.db') or die('Unable to open database');
	$query = <<<EOD
		CREATE TABLE IF NOT EXISTS users (username STRING, address STRING, city STRING, state STRING, zipcode STRING, email STRING, date STRING, nature STRING, jutsu STRING, comments STRING)
EOD;
	$db->exec($query) or die('Create db failed');
	$user = $_POST['username'];
	$addy = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zipcode'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$nature = $_POST['natures'];
	$jutsu = $_POST['jutsu'];
	$comments = $_POST['comments'];
	$query = <<<EOD
		INSERT INTO users VALUES ( '$user', '$addy', '$city', '$state', '$zip', '$email', '$date', '$nature', '$jutsu', '$comments' )
EOD;
	$db->exec($query) or die("Unable to add user $user");
	$result = $db->query('SELECT * FROM users') or die('Query failed');
	while ($row = $result->fetchArray())
	{
  		echo "User: {$row['username']}\nAddress: {$row['address']}\nCity: {$row['city']}\nState: {$row['state']}\nZipcode: {$row['zipcode']}\nEmail: {$row['email']}\nDate: {$row['date']}\nChakra Nature: {$row['nature']}\nJutsu: {$row['jutsu']}\nComments: {$row['comments']}\n";
  		echo "<br><br>";
	}

?>