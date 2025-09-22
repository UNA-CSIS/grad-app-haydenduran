<?php
    session_start();
    $_SESSION["accomplishments"] = $_POST["accomplishments"];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Please Confirm</title>
</head>
<body>
    <h1>Please Confirm the Information is Correct.</h1>
    <form action="results.php" method="POST">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION["fname"] . " " . $_SESSION["lname"]); ?></p>
        <p><strong>Courses:</strong> <?php foreach ($_SESSION["numCourses"] as $numCourse) { echo htmlspecialchars($numCourse) . "<br>"; } ?></p>
        <p><strong>Accomplishments:</strong> <?php echo isset($_SESSION["accomplishments"]) ? nl2br(htmlspecialchars($_SESSION["accomplishments"])) : ''; ?></p>
        <input type="hidden" name="fname" value="<?php echo htmlspecialchars($first); ?>">
        <input type="hidden" name="lname" value="<?php echo htmlspecialchars($last); ?>">
        <label for="accomplishments">Submit using the button below.</label><br> 
        <input type="submit" value="Submit">
    </form>

</body>
</html>
