<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Number Checker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            background: linear-gradient(to bottom, #243B55, #141E30);
            color: #fff;
            margin-top: 70px;
            overflow: hidden;
        }
        
    </style>
    </style>
</head>

<body>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        if(isset($_POST['check_adam'])){
            $number = $_POST['adam'];
           	$var = $number*$number;
         	$reverse = strrev($var);  	
            $root= sqrt($reverse);
            $val=strrev($root);

            if ($number==$val) {
            	echo "Number Given = $number <br><br> Result = It is an Adam number!";
            }
            else{
            	echo "Number Given = $number <br><br> Result = It is not an Adam number!";
            }
        }
    }
    
    ?>

    <h1>Adam Number Checker</h1>
    <br>
    <br>
    <form action="adam_number.php" method="POST">
        <label for="adam">Enter a Number to Check :</label>
        <input type="number" name="adam" id="adam" placeholder="Write here">
        <input type="submit" name="check_adam" value="Check">      
    </form>


    
</body>
</html>
