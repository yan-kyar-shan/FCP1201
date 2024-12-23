<?php
// PHP code section starts
$greeting = "Hello, welcome to my simple PHP page!";
$date = date("Y-m-d H:i:s"); // Get the current date and time
// PHP code section ends
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
</head>
<body>
    <h1><?php echo $greeting; ?></h1> <!-- Displaying PHP variable -->
    <p>Current Date and Time: <?php echo $date; ?></p> <!-- Displaying current date and time -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Simple PHP Page</p> <!-- Displaying the current year -->
    </footer>
</body>
</html>
