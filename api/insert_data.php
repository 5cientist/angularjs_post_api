<?php
require '../dbconfig.php';
$conn = mysqli_connect("localhost", "admin", "admin", "angularjspost");
$info = json_decode(file_get_contents("php://input"));
if(cont($info) > 0)
{
    $name = mysqli_real_escape_string($conn, $info->name);
    $email = mysqli_real_escape_string($conn, $info->email);
    $age = mysqli_real_escape_string($conn, $info->age);
    $query = "INSERT INTO insertdata(name, email, age) VALUES ('$name', '$email', '$age')";
    if(mysqli_query($conn, $query))
    {
        echo "inserted successfully";
    }
    else
    {
        echo "failed";
    }
}











?>