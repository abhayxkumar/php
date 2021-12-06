<?php
$connection = new mysqli("localhost", "root", "", "testdb");

if(!$connection)
{
    echo "Not Connected";
}

$uname = $_POST['uname'];
$password = $_POST['password'];

$insert_query = "INSERT INTO user (uname, password) VALUES ('$uname', MD5('$password'))";

if(mysqli_query($connection, $insert_query))
{
    echo "Registration Successful";
}
else
{
    echo "Registration Failed";
}





?>