<html>	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Övergång</title>

	<link rel="stylesheet" type="text/css" href="stylesheet.css">

   <script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</head>
<body>
</body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databas_1";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

 
$sql1 = "SELECT id, name, ort, email, nummer  FROM formular";
$result = $conn->query($sql1);





if ($result->num_rows > 0) {
	echo "<table class='table table-bordered'><tr><th>ID</th><th>Namn</th><th>Ort</th><th>Email</th><th>Nummer</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr class='active'> <td>" .$row["id"]. "</td> <td>" .$row["name"]. "</td> <td> " .$row["ort"]. "</td> <td>" .$row["email"]. "</td> <td>" .$row["nummer"]. "</td> </tr>";
	} 
	echo "</table>";
} else {
	echo "0 Results";
}

$conn->close();

?>