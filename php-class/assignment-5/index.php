<!DOCTYPE html>
<html>
<head>
    <title>Random Number Guess Game</title>
</head>
<body>
    <h1>Random Number Guess Game</h1>
    <?php
   
        $randomNumber = rand(1, 10);
        $guess = $_POST['guess'];
        $guessCount = isset($_POST['guessCount']) ? $_POST['guessCount'] : 0;
        $guessList = isset($_POST['guessList']) ? $_POST['guessList'] : '';
        $guessList .= $guess . " ";
        $guessCount++;

        echo $randomNumber . "<br>";

        if ($guess > $randomNumber) {
            echo "<p>Your guess of $guess is high.</p>";
        } 
        elseif ($guess < $randomNumber) {
            echo "<p>Your guess of $guess is low.</p>";
        } 
        else {
            echo "<p>Your guess of $guess is correct!</p>";
        }

        if ($guessCount < 15) {
            echo "<form action='index.php' method='post'>
                <input type='hidden' name='guessCount' value='$guessCount'>
                <input type='hidden' name='guessList' value='$guessList'>
                <input type='number' name='guess' placeholder='Enter a number'>
                <input type='submit' value='Guess'>
            </form>";
        } 
        else {
            echo "<p>You have reached the maximum number of guesses. The correct number was $randomNumber.</p>";
        }



    ?>
</body>
</html>
