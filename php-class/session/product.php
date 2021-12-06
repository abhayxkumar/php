<?php 

session_start();

if(isset($_SESSION['uname'])){
    echo "<h1>Product Page<h1>";
    echo "<h2 align = right> Welcome, ".$_SESSION['uname']."</h2>";
    echo "<a href= 'homee.php'>Click here to view home page</a><br>";
    echo "<br><a href = 'logout.php'><input type = button name = logout value = logout></a>";
}
else
{
    echo "<script>location.href = 'login.php'</script>";
}

?>