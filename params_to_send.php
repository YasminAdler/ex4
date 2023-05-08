<!DOCTYPE html>
<html>
<head>
    <title>get parameters PHP</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve the values of userName, password, and clue from the query string
    $userName = $_GET["userName"];
    $password = $_GET["password"];
    $clue = $_GET["clue"];

    // Display the received values
    echo "Hello: " . $userName . "<br>";
    // echo "Password: " . $password . "<br>";
    // echo "Clue: " . $clue . "<br>";

    // You can perform further actions with the received values, such as database operations or validation checks

    // Example: Checking if the password is correct
    if ($password == "Lemonade" || $password == "lemonade") {
        echo "<p>Your answer is: $password and this password is correct! You can leave the room now!</p>";
    } else {
        echo "<p>Your answer is: $password and this password is incorrect! Go back and try again!</p>";
        
    }
    if ($clue == "yes") {
        echo "<p>Here is your clue: Life just gave you lemons.. now you just need to figure out what to do with it.
        You think you know the password? Go back to the web page and try again!</p>";
    } 
}
?>


</body>
</html>
