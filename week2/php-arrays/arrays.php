<!doctype html>
<html>

<head>
    <title>Links and Arrays</title>
</head>

<body>

    <h1>Links and Arrays</h1>

    <p>Use PHP echo and arrays to output the following link information:</p>

    <hr>

    <?php

    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';

    echo '<h1>' . $link['name'] . '</h1>';
    echo "<a href=\"{$link['url']}\">{$link['name']}</a>";
    echo '<br>';
    echo "<img src=\"{$link['image']}\" alt=\"{$link['name']}\" width=200>";
    echo '<p>' . $link['description'] . '</p>';

    ?>

</body>

</html>