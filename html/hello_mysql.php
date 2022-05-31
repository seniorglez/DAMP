<!DOCTYPE html>  
<head>
  <title>Hello db</title>
 </head>
 <body>
    <h1 style="text-align:center;color:green;">
  
<?php
 $link = mysqli_connect ("mysql:3306", $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);
 
if (!$link) {
    echo "Error: Unable to connect to the database." . PHP_EOL . "</br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL. "</br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL. "</br>";
    exit;
}
 
echo "Whoa! A proper connection to the database was made!" . PHP_EOL. "</br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
 
mysqli_close($link);
?>
    		</h1>
	</body>
</html>
