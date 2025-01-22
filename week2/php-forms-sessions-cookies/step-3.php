<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Step 3</title>
</head>

<body>

    <p>You are logged in as <?php echo $_SESSION['email']; ?>.</p>
    <a href="step-4.php">Logout</a>

</body>

</html>