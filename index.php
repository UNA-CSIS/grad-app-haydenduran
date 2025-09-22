<?php
    session_start();    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
    </head>
    <h1>What is your first and last name? </h1>
    <body>
        <form action="courses.php" method="POST">
        First name: <input type="text" name="fname"><br><br>
        Last name:  <input type="text" name="lname"><br><br>
        <input type="submit">
        </form>
        
        
    </body>
</html>