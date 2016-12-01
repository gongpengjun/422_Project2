<html>
<head>

<title>Dolla Tree</title>
<link href="dolla.css" rel="stylesheet" type="text/css" />

</head>

<body>


<div id="header">
        Free Dolla Games
</div>

<div id="intro">

<?php
$server = "";
$username = "root";
$password = "";
$dbname = "login";

session_start();

$ref = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
$table_name;
if (strcmp($ref, "/navigator.php") == 0) {
   $sql = "SELECT Name, Score, ID FROM duck_flight_scores ORDER BY Score DESC";
   $table_name = 'duck_flight_scores';
}
if (strcmp($ref, "/brick/game.html") == 0) {
   $sql = "SELECT Name, Score, ID FROM hit_brick_scores ORDER BY Score DESC";
   $table_name = 'hit_brick_scores';
}

//echo "<html><body>";
if (isset($_SESSION['user_name'])) {
        //echo $_SESSION['user_name'];

//echo $ref . $table_name;
$sPOSTscore = htmlspecialchars($_POST["score"]);
$sPOSTname = $_SESSION['user_name'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = sprintf("SELECT Name, Score, ID FROM '%s' ORDER BY Score DESC", $table_name);
$result = $conn->query($sql);
$update = 0;
if ($result->num_rows > 0) {

    $i = 1;
    while($row = $result->fetch_assoc()) {
        if ($row["Score"] == $sPOSTscore && strcmp($row["Name"], $sPOSTname) == 0 && $update == 0) {
		$update = 1;
		echo "<b>Congrats! You got a TOP 5 high score!</b><br>#imagineFireworks";
	}
        if ($row["Score"] < $sPOSTscore && $update == 0) {
              
                $sql1 = sprintf("UPDATE %s SET Score = %d, Name = '%s' WHERE ID = %d", $table_name, $sPOSTscore, $sPOSTname, $row["ID"]);
                if ($conn->query($sql1) == TRUE) {
                        echo "<b>Congrats! You got a TOP 5 high score!</b><br>#imagineFireworks";	
                } else {
                        echo "Error: " . $conn->error;
                }
		$update = 1;
        }
        $i++;
    }
} else {
	echo '0 results';
}
if ($update == 0) {
	echo "<b>Sorry, no high score for you!</b><br>#tryHarder";
}
$conn->close();
} else {
	echo 'You must be logged in to submit your score';
}
echo '<script>setTimeout(function (){ window.location.href = "http://ec2-35-160-99-158.us-west-2.compute.amazonaws.com' . $ref . '"; }, 4000);</script>';
echo '<br><br>You will be redirected in just a moment';
//echo "</body></html>";
?>

</div>


<div id="pageStuff">
        
        
        
</div>




</body>
</html>
