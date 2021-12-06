<!DOCTYPE html>
<?php
// setcookie("aryan", getenv('REMOTE_ADDR'), time()+86400, "/");
setcookie("mycookie", "abhay", time()+86400, "/");
setcookie("mycookie2", "abhay2", time()+86400, "/");
setcookie("mycookie3", "abhay3", time()+86400, "/");
setcookie("mycookie4", "abhay4", time()+86400, "/");
setcookie("mycookie5", "abhay5", time()+86400, "/");
?>

<html lang="en">
<head>
    <title>Cookies in PHP</title>
</head>
<body>
    
<?php
// $ip = $_COOKIE["aryan"];
// $ip = "45.127.227.60";
// $deip = @json_decode(file_get_contents("http://geoplugin.net/json.gp?ip=".$ip));
// echo 'Country Name: '.$deip->geoplugin_countryName;
// echo '<br>';
// echo 'Currency Code: '.$deip->geoplugin_currencyCode;
// echo '<br>';
// echo 'Currency Symbol: '.$deip->geoplugin_currencySymbol;
foreach ($_COOKIE as $key => $value) {
    echo $key.": ".$value."<br>";
}




?>
</body>
</html>

