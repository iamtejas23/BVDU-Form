<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
//
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$name = $_POST['password'];



// Database connection
$conn = new mysqli('localhost','root','','form_add');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(name, surname, email, mobile, password) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $name, $surname, $email, $mobile, $password );
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}






?>