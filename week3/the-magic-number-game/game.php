<?php

$number = '';
$magicNumber = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = (int) $_POST['number'];

    if ($number % 3 === 0) {
        $magicNumber .= 'Fizz';
    }

    if ($number % 5 === 0) {
        $magicNumber .= 'Buzz';
    }

    $magicNumber = $magicNumber ?: (string) $number;
}

?>

<!doctype html>
<html>

<head>
    <title>The Magic Number Game</title>
</head>

<body>

    <form method="post" action="">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <button type="submit">Get Magic Number</button>
    </form>

    <?php

    if ($magicNumber) {
        echo '<p>' . "Magic Number: $magicNumber" . '</p>';
    }

    ?>

</body>

</html>