<?php

$name = "abhay";
$passw = "admin";
session_start();
if(isset($_SESSION['uname']))
{
    echo "<h1>Home Page<h1>";
    echo "<h2 align = right> Welcome, ".$_SESSION['uname']."</h2>";
    echo "<a href= 'product.php'>Click here to view products</a><br>";
    echo "<br><a href = 'logout.php'><input type = button name = logout value = logout></a>";

}
else
{
    if($name == $_POST['uname'] && $passw == $_POST['pwd'])
    {
        $_SESSION['uname'] = $name;
        echo "<script>location.href = 'homee.php'</script>";
    }
    else
    {
        echo "<script>alert('Invalid Username or Password!')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
}

?>