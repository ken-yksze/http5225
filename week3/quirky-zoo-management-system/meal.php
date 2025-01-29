<!doctype html>
<html>

<head>
    <title>Quirky Zoo Management System</title>
</head>

<body>

    <h1>Quirky Zoo Management System</h1>

    <?php

    date_default_timezone_set('EST5EDT');
    $currentTime = date('H:i:s');
    $currentHour = (int) $currentTime;

    if ($currentHour >= 5 && $currentHour < 9) {
        $meal = 'Breakfast';
        $food = 'Bananas, Apples, and Oats';
    } elseif ($currentHour >= 12 && $currentHour < 14) {
        $meal = 'Lunch';
        $food = 'Fish, Chicken, and Vegetables';
    } elseif ($currentHour >= 19 && $currentHour < 21) {
        $meal = 'Dinner';
        $food = 'Steak, Carrots, and Broccoli';
    } else {
        $meal = 'No meal';
        $food = 'The animals are not being fed at this time';
    }

    echo '<h2>' . "Current Time: $currentTime" . '</h2>';
    echo '<h2>' . "Meal: $meal" . '</h2>';
    echo '<h2>' . "Food: $food" . '</h2>';

    ?>

</body>

</html>