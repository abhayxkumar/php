<?php 

session_start();
if(!isset($_SESSION['uname'])){
    echo "<h2>Hello Product Page";
    echo "<h1 align = right> Welcome, ".$_SESSION['uname']."</h1>";
    echo "<a href= 'product.php'>Click here to view products</a><br>";
    echo "<br><a href= 'logout.php'><input type = button name = logout value = logout></a>";
}
else
{
    echo "<script>location.href='login.php'</script>";
}

?>