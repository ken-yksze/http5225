<?php

// Connect to the MySQL database
$connect = mysqli_connect('sql213.infinityfree.com', 'if0_37236217', 'qhqinfUbLSV', 'if0_37236217_http5225');

// If the connection did not work, display an error message
if (!$connect) {
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

$id = $_GET['id'];

if (!$id) {
    echo 'Error: ID not given <br>';
    exit;
}

?>
<!doctype html>
<html>

<head>
    <title>HTTP5225 Assignment 1</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>

    <h1>HTTP5225 Assignment 1</h1>

    <?php

    // Create the anime query
    $anime_query = "SELECT anime_id, name, thumbnail, no_of_episodes, premiered_on
            FROM animes
            WHERE anime_id=$id";

    // Execute the anime query
    $anime_result = mysqli_query($connect, $anime_query);

    // If there is no result, display an error message
    if (!$anime_result) {
        echo 'Error Message: ' . mysqli_error($connect) . '<br>';
        exit;
    }

    $anime_records = mysqli_fetch_assoc($anime_result);

    if (empty($anime_records)) {
        echo 'Error: Anime not found <br>';
        exit;
    }

    $anime_record = $anime_records[0];
    echo '<h2>' . $anime_record['name'] . '</h2>';
    echo '<img src="' . $anime_record['thumbnail'] . '" width="100">';
    echo '<p>' . 'Number of episodes: ' . $anime_record['no_of_episodes'] . '</p>';
    echo '<p>' . 'Premiered On: ' . $anime_record['premiered_on'] . '</p>';

    // Create the character query
    $character_query = "SELECT character_id, name, thumbnail
            FROM characters
            WHERE anime_id=$id";

    // Execute the character query
    $character_result = mysqli_query($connect, $character_query);

    if ($character_result) {
        echo '<h3>Characters</h3>';
        $character_records = mysqli_fetch_assoc($character_result);

        if (empty($character_records)) {
            echo '<p>No characters</p>';
            exit;
        }

        echo '<ul id="characters">';

        // Loop through the character records found
        foreach ($character_records as $character_record) {
            echo '<li id="' . 'character-' . $character_record['character_id'] . '">';
            echo '<h4>' . $character_record['name'] . '</h4>';
            echo '<img src="' . $character_record['thumbnail'] . '" width="100">';
            echo '</li>';
        }

        echo '</ul>';
    }

    ?>


</body>

</html>