<?php
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli ('localhost', 'root', '', 'test');
if ($conn->connect_error){
    die('Database Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name, mobile, email, password)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $mobile, $email, $password);
    $stmt->execute();
    echo "Database connection Successfully";
    $stmt->close();
    $conn->close();
}

?>