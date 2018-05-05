<!DOCTYPE html>
<html>
<body>

<?php
$servername = "166.62.28.96";
$username = "tutuorwpdb";
$password = "tutorwpdb@321!";
$dbname = "tutorwpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT *
FROM rooms
WHERE room_no NOT IN (
   SELECT DISTINCT room_no
   FROM reservation
   WHERE check_in <= '2017-10-14' AND check_out >= '2017-10-13')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. "<br> Room: ". $row["r_name"]. " - Price: ". $row["price"]. " " . $row["description"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>

