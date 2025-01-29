<!doctype html>
<html>

<head>
    <title>PHP If Statements</title>
</head>

<body>

    <h1>PHP If Statements</h1>

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything
        outputs correctly:</p>

    <?php

    // **************************************************
    // Do not edit this code
    
    $randomNumber = ceil(rand(1, 3));

    echo '<p>The random number is ' . $randomNumber . '.</p>';

    if ($randomNumber == 1) {
        $linkName = 'Codecademy';
        $linkURL = 'https://www.codecademy.com/';
        $linkImage = '';
        $linkDescription = 'Learn to code interactively, for free.';
    } elseif ($randomNumber == 2) {
        $linkName = '';
        $linkURL = 'https://www.w3schools.com/';
        $linkImage = 'w3schools.png';
        $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
    } else {
        $linkName = 'Mozilla Developer Network';
        $linkURL = 'https://developer.mozilla.org';
        $linkImage = 'mozilla.png';
        $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
    }

    // **************************************************
    
    echo '<h2>' . ($linkName ?: $linkURL) . '</h2>';

    if ($linkImage) {
        echo "<img src=\"$linkImage\" width=\"200\">";
    }

    if ($linkDescription) {
        echo '<p>' . $linkDescription . '</p>';
    }

    if ($linkURL) {
        echo '<p>' . "<a href=\"$linkURL\">" . ($linkName ?: $linkURL) . '</a>' . '</p>';
    }

    ?>

</body>

</html>