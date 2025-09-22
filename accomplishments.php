<?php
    session_start();
    $_SESSION['numCourses'] = $_POST['numCourses'];
    $takenCourses = is_array($_POST['numCourses']) ? count($_POST['numCourses']) : 0;
    $totalCourses = 5;
    
    $_SESSION["takenCourses"] = $takenCourses;
    $_SESSION["totalCourses"] = $totalCourses;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Accomplishments</title>
    </head>
    <body>
        <h1> Write an Essay of Your Personal Accomplishments Below.</h1>
        <form action="confirmations.php" method="POST">
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
