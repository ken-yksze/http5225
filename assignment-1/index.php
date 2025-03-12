<?php

// Connect to the MySQL database
$connect = mysqli_connect('sql213.infinityfree.com', 'if0_37236217', 'qhqinfUbLSV', 'if0_37236217_http5225');

// If the connection did not work, display an error message
if (!$connect) {
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!doctype html>
<html>

<head>
    <title>HTTP5225 Assignment 1</title>
</head>

<body>

    <h1>HTTP5225 Assignment 1</h1>
    <h2>Animes</h2>

    <?php

    // Create a query
    $query = 'SELECT anime_id, name, thumbnail, no_of_episodes, premiered_on
            FROM animes
            ORDER BY premiered_on';

    // Execute the query
    $result = mysqli_query($connect, $query);

    // If there is no result, display an error message
    if (!$result) {
        echo 'Error Message: ' . mysqli_error($connect) . '<br>';
        exit;
    }

    echo '<ul id="animes">';

    // Loop through the records found
    while ($record = mysqli_fetch_assoc($result)) {
        echo '<li id="' . 'anime-' . $record['anime_id'] . '">';
        echo '<h3>' . $record['name'] . '</h3>';
        echo '<img src="' . $record['thumbnail'] . '" width="100">';
        echo '<p>' . 'Number of episodes: ' . $record['no_of_episodes'] . '</p>';
        echo '<p>' . 'Premiered On: ' . $record['premiered_on'] . '</p>';
        echo '</li>';
    }

    echo '</ul>';

    ?>


</body>

</html>