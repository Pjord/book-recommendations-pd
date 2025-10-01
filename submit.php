<?php
$name = $_POST['name'];
$lname = $_POST['lname'];
$level = $_POST['līmenis'];
$nosaukums = $_POST['nosaukums'];
$apraksts = $_POST['apraksts'];
$full_name = "$name, _ , $lname";


$servername = "localhost";
$username = "book_review_user_01102025";
$password = "password";
$dbname = "book_review_01102025";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO book_review( full_name, book_title, review_text, rating)
VALUES ('$full_name', '$nosaukums','$apraksts', '$level')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php 
     echo $name;
     ?>
    </h1>
<a href="index.html">link text</a>
   
</body>
</html>