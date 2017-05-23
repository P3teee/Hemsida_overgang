
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

<div class="cointainer-fluid">
<div id="shit">
</div> 


<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#side" aria-expanded="false" aria-controls="side" id="button1">
  Meny
</button>


<div id="side" class="pull-left collapse">
	<ul class="nav nav-pills nav-stacked" id="menu1">
		<li> <img src="placeholder.png" alt="Logo" class="img-circle center-block" id="logo"></li>
		<li><p></p></li>
  		<li role="presentation"><a href="index.html" class="link_list">Hem</a></li>
  		<li role="presentation"><a href="info.html" class="link_list">Info</a></li>
  		<li role="presentation"  class="active" ><a href="formular.html" class="link_list active">Formulär</a></li>
  		<li> <button class="btn btn-primary center-block" type="button" data-toggle="collapse" data-target="#side" aria-expanded="false" aria-controls="side" id="button2">
  		
  Meny
</button></li>
<li> <a href="login.php"><button class="btn btn-primary center-block" type="button">Sug penis</button></a></li>
	</ul>
</div>

<header id="header1">
	<img alt="header" src="headerr.png">
</header>

<section id="section1" class="black-bg white-text row">
	<h1 class="col-sm-12">Formulär</h1>
		<form class="form-horizontal" action="index.php" method="get">
  			<div class="form-group">
    			<label for="InputName" class="col-sm-1 control-label">Namn</label>
    			<div class="col-sm-11 center-block">
    			<p class="form-control"> <?php echo $_POST["name"]; ?><br></p>
    			</div>
  			</div>
  		<div class="form-group">
    		<label for="InputOrt" class="col-sm-1 control-label">Ort</label>
    		<div class="col-sm-11">
    		<p class="form-control"><?php echo $_POST["ort"]; ?><br></p>
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="InputMail" class="col-sm-1 control-label">Mail</label>
    		<div class="col-sm-11">
    		<p class="form-control"> <?php echo $_POST["email"]; ?><br></p>
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="InputTel" class="col-sm-1 control-label">Telefon</label>
    		<div class="col-sm-11">
    		<p class="form-control"> <?php echo $_POST["nummer"]; ?><br></p>
    		</div>
  		</div>
  			
		</form>
</section>
</div>
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

 $sql = "INSERT INTO formular (name, ort, email, nummer)
VALUES ('$_POST[name]', '$_POST[ort]', '$_POST[email]', '$_POST[nummer]')"; 
$sql1 = "SELECT id, name, ort, email, nummer  FROM formular";
$result = $conn->query($sql1);



 if ($conn->query($sql) === TRUE) {
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 




 if ($result->num_rows > 0) {
	echo "<table class='table table-striped'><tr><th>ID</th><th>Namn</th><th>Ort</th><th>Email</th><th>Nummer</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr> <td>" .$row["id"]. "</td> <td>" .$row["name"]. "</td> <td> " .$row["ort"]. "</td> <td>" .$row["email"]. "</td> <td>" .$row["nummer"]. "</td> </tr>";
	} 
	echo "</table>";
} else {
	echo "0 Results";
} 

$conn->close();

?>



</html>