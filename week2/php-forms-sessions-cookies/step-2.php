<?php

session_start();

if ($_POST['email'] == 'jane.doe@email.com' and $_POST['password'] == 'password') {

    $_SESSION['login'] = true;
    $_SESSION['email'] = $_POST['email'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Step 2</title>
</head>

<body>

    <?php if (isset($_SESSION['login'])): ?>

        <h2>Success!</h2>
        <p>You have been logged in!</p>
        <a href="step-3.php">Continue to Step 3</a>

    <?php else: ?>

        <h2>Error!</h2>
        <p>Incorrect email and/or password!</p>
        <a href="step-1.html">Try Again</a>

    <?php endif; ?>

</body>

</html>