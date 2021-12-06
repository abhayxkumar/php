<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet"> 
</head>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$str3 = $_POST['str3'];
$str4 = $_POST['str4'];
$str5 = $_POST['str5'];
$str6 = $_POST['str6'];
$str7 = $_POST['str7'];
$str8 = $_POST['str8'];
$str9 = $_POST['str9'];
$str10 = $_POST['str10'];
$str11 = $_POST['str11'];
$str12 = $_POST['str12'];
$str13 = $_POST['str13'];
$str14 = $_POST['str14'];
$str15 = $_POST['str15'];
$str16 = $_POST['str16'];
$str17 = $_POST['str17'];
$str18 = $_POST['str18'];
$str19 = $_POST['str19'];
$str20 = $_POST['str20'];
$str21 = $_POST['str21'];
$str22 = $_POST['str22'];
$str23 = $_POST['str23'];
$str24 = $_POST['str24'];
$str25 = $_POST['str25'];
$str26 = $_POST['str26'];

//md5()
if ($str2 != "") {
    $res1 = md5($str1, $str2);
}
else {
    $res1 = md5($str1);
}

//number_format()
if ($str3 != "" && $str4 != "" && $str5 != "" && $str6 != "") {
    $res2 = number_format($str3, $str4, $str5, $str6);
}
elseif ($str3 != "" && $str4 != "" && $str5 != "") {
    $res2 = number_format($str3, $str4, $str5);
}
elseif ($str3 != "" && $str4 != "") {
    $res2 = number_format($str3, $str4);
}
elseif ($str3 != "") {
    $res2 = number_format($str3);
}

//ord()
$res3 = ord($str7);

//rtrim()
if ($str8 != "" && $str9 != "") {
    $res4 = rtrim($str8, $str9);
}
elseif ($str8 != "") {
    $res4 = rtrim($str8);
}

//str_replace()
if ($str10 != "" && $str11 != "" && $str12 != "" && $str13 != "") {
    $res5 = str_replace($str10, $str11, $str12, $str13);
}
elseif ($str10 != "" && $str11 != "" && $str12 != "") {
    $res5 = str_replace($str10, $str11, $str12);
}
elseif ($str10 != "" && $str11 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str10 != "" && $str12 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str10 != "" && $str13 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str11 != "" && $str12 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str11 != "" && $str13 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str12 != "" && $str13 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str10 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str11 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str12 != "") {
    $res5 = "Minimum 3 arguments *!";
}
elseif ($str13 != "") {
    $res5 = "Minimum 3 arguments *!";
}

//strlen()
$res6 = strlen($str14);

//strnatcasecmp()
if ($str15 != "" && $str16 != "") {
    $res7 = strnatcasecmp($str15, $str16);
}
elseif ($str15 != "") {
    $res7 = "Minimun 2 arguments *!";
}
elseif ($str16 != "") {
    $res7 = "Minimun 2 arguments *!";
}

//strrpos()
if ($str17 != "" && $str18 != "" && $str19 != "") {
    $res8 = strrpos($str17, $str18, $str19);
}
elseif ($str17 != "" && $str18 != "") {
    $res8 = strrpos($str17, $str18);
}
elseif ($str17 != "") {
    $res8 = "Minimum 2 arguments *!";
}
elseif ($str18 != "") {
    $res8 = "Minimum 2 arguments *!";
}

//substr()
if ($str20 != "" && $str21 != "" && $str22 != "") {
    $res9 = substr($str20, $str21, $str22);
}
elseif ($str20 != "" && $str21 != "") {
    $res9 = substr($str20, $str21);
}
elseif ($str20 != "") {
    $res9 = "Minimum 2 arguments *!";
}
elseif ($str21 != "") {
    $res9 = "Minimum 2 arguments *!";
}

//strtolower()
$res10 = strtolower($str23);

//bin2hex()
$res11 = bin2hex($str24);

//chop()
if ($str25 != "" && $str26 != "") {
    $res12 = chop($str25, $str26);
}
elseif ($str25 != "") {
    $res12 = chop($str25);
}
}

?>

<body>
    <div class="wrapper">
    
    <h1>String Functions in PHP</h1>
    
    <form method="POST">
    <table>

        <!-- Table Heading -->
        <tr>
            <th>S. No.</th>
            <th>String Function</th>
            <th>Input</th>
            <th>Button</th>
            <th>Output</th>
        </tr>

        <!-- md5() -->
        <tr>
            <td class="tcenter">1.</td>
            <td>md5()</td>
            <td>
                <input name="str1" type="text" placeholder="string *">
                <input name="str2" type="text" placeholder="TRUE/FALSE">
            </td>
            <td>
                <button type="submit" name="md5">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['md5'])){echo @$res1;}?>">
            </td>
        </tr>

        <!-- number_format() -->
        <tr>
            <td class="tcenter">2.</td>
            <td>number_format()</td>
            <td>
                <input name="str3" type="text" placeholder="number *">
                <input name="str4" type="number" placeholder="decimal">
                <input name="str5" type="text" placeholder="decimalpoint">
                <input name="str6" type="text" placeholder="separator">
            </td>
            <td>
                <button type="submit" name="number_format">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['number_format'])){echo @$res2;}?>">
            </td>
        </tr>


        <!-- ord() -->
        <tr>
            <td class="tcenter">3.</td>
            <td>ord()</td>
            <td>
                <input name="str7" type="text" placeholder="string *">
            </td>
            <td>
                <button type="submit" name="ord">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['ord'])){echo @$res3;}?>">
            </td>
        </tr>

        <!-- rtrim() -->
        <tr>
            <td class="tcenter">4.</td>
            <td>rtrim()</td>
            <td>
                <input name="str8" type="text" placeholder="string *">
                <input name="str9" type="text" placeholder="charlist">
            </td>
            <td>
                <button type="submit" name="rtrim">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['rtrim'])){echo @$res4;}?>">
            </td>
        </tr>

        <!-- str_replace() -->
        <tr>
            <td class="tcenter">5.</td>
            <td>str_replace()</td>
            <td>
                <input name="str10" type="text" placeholder="find *">
                <input name="str11" type="text" placeholder="replace *">
                <input name="str12" type="text" placeholder="string *">
                <input name="str13" type="text" placeholder="count">
            </td>
            <td>
                <button type="submit" name="srt_replace">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['str_replace'])){echo @$res5;}?>">
            </td>
        </tr>

        <!-- strlen() -->
        <tr>
            <td class="tcenter">6.</td>
            <td>strlen()</td>
            <td>
                <input name="str14" type="text" placeholder="string *">
            </td>
            <td>
                <button type="submit" name="strlen">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['strlen'])){echo @$res6;}?>">
            </td>
        </tr>

        <!-- strnatcasecmp() -->
        <tr>
            <td class="tcenter">7.</td>
            <td>strnatcasecmp()</td>
            <td>
                <input name="str15" type="text" placeholder="string1 *">
                <input name="str16" type="text" placeholder="string2 *">
            </td>
            <td>
                <button type="submit" name="strnatcasecmp">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['strnatcasecmp'])){echo @$res7;}?>">
            </td>
        </tr>

        <!-- strrpos() -->
        <tr>
            <td class="tcenter">8.</td>
            <td>strrpos()</td>
            <td>
                <input name="str17" type="text" placeholder="string *">
                <input name="str18" type="text" placeholder="find *">
                <input name="str19" type="number" placeholder="start">
            </td>
            <td>
                <button type="submit" name="strrpos">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['strrpos'])){echo @$res8;}?>">
            </td>
        </tr>

        <!-- substr() -->
        <tr>
            <td class="tcenter">9.</td>
            <td>substr()</td>
            <td>
                <input name="str20" type="text" placeholder="string *">
                <input name="str21" type="number" placeholder="start *">
                <input name="str22" type="number" placeholder="length">
            </td>
            <td>
                <button type="submit" name="substr">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['substr'])){echo @$res9;}?>">
            </td>
        </tr>

        <!-- strtolower() -->
        <tr>
            <td class="tcenter">10.</td>
            <td>strtolower()</td>
            <td>
                <input name="str23" type="text" placeholder="string *">
            </td>
            <td>
                <button type="submit" name="strtolower">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['strtolower'])){echo @$res10;}?>">
            </td>
        </tr>

        <!-- bin2hex() -->
        <tr>
            <td class="tcenter">11.</td>
            <td>bin2hex()</td>
            <td>
                <input name="str24" type="text" placeholder="string *">
            </td>
            <td>
                <button type="submit" name="bin2hex">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['bin2hex'])){echo @$res11;}?>">
            </td>
        </tr>

        <!-- chop() -->
        <tr>
            <td class="tcenter">12.</td>
            <td>chop()</td>
            <td>
                <input name="str25" type="text" placeholder="string *">
                <input name="str26" type="text" placeholder="charlist">
            </td>
            <td>
                <button type="submit" name="chop">Apply</button>
            </td>
            <td>
                <input class="tcenter" type="text" readonly value="<?php if(isset($_POST['chop'])){echo @$res12;}?>">
            </td>
        </tr>

    </table>
    </form>
</div>
</body>
</html>


