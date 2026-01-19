<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$sid = filter_input(INPUT_POST, 'sid', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$task = filter_input(INPUT_POST, 'task', FILTER_SANITIZE_STRING);
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
$nationality = filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING);


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db1";


$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
  die('Connect Error ('. $conn->connect_errno .') '.$conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "INSERT INTO user (name, phone, sid, email, task, dob, nationality) 
            VALUES(?, ?, ?, ?, ?, ?, ?)");

  if ($stmt === false) {
    die('Prepare failed: ' . $conn->error);
  }

  $stmt->bind_param("sssssss", $name, $phone, $sid, $email, $task, $dob, $nationality);

  if ($stmt->execute()) {
    echo "Registered, thank you!";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}

?>
</div>

</body>
</html>