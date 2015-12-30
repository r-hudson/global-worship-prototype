<?php



// select which db to use
mysql_select_db($dbname) 
// send error if connecting to db failed
or die(mysql_error());

$name = $_GET["name"];
$language = $_GET["lang"];


$query = 
"";

$result = mysql_query($query) or die(mysql_error());
while ($r = mysql_fetch__array($result)) {
	
}

<html>
	<head>
	</head>

	<body>
		Hello World!
	</body>
</html>

?>