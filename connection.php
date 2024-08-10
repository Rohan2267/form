<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="registrations";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dropdown = $_POST['dropdown'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];




$sql = "INSERT INTO data1 (name, email, phonenumber, selectcity, gender, hobbies)
VALUES ('$name', '$email', '$phone', '$dropdown', '$gender','$hobby')";


if ($conn->query($sql) === TRUE) {
  echo "<br>,> New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
mysqli_close($conn);
?>