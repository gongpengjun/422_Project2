<?php
$server = "";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<table border="1" align="center">';
$sql = "SELECT Name, Score FROM duck_flight_scores ORDER BY Score DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row 
    echo '<tr><td id ="" height = "20px" width = "150px" name=""><b>Top 5 High Scores</b></td></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr><td id ="" height = "20px" width = "150px" name="">' . $row["Name"]. ": " . $row["Score"]. '</td>';
    }
} else {
    echo "0 results";
}
echo '</table><br><br>';
$conn->close();

?>
