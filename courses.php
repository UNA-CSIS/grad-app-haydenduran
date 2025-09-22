<?php
    session_start();
    
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname']  = $_POST['lname'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Courses</title>
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h1>
        
        <form action="accomplishments.php" method="POST">
            <fieldset>
            <h1>What Courses have you taken?</h1>         
            <h2>Select from Below Courses:</h2>
            
            <input type="hidden" name="fname" value="<?php echo htmlspecialchars($_SESSION['fname']); ?>">
            <input type="hidden" name="lname" value="<?php echo htmlspecialchars($_SESSION['lname']); ?>">
            <label><input type="checkbox" name="numCourses[]" value="Object-Oriented Programming"> Object-oriented programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Systems Analysis & Design"> Systems analysis & design</label><br>
            <label><input type="checkbox" name="courses[]" value="Advanced Programming"> Advanced programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security</label><br>
            </fieldset>
            <br>
            <input type="submit" value="Submit">
        </form>

    </body>
</html>    