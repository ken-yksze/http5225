<!doctype html>
<html>

<head>
    <title>For-Loop Exercise</title>
    <style>
        ul {
            list-style: none;
        }

        li+li {
            border-top: 1px solid gray;
        }

        h3 {
            text-indent: 2em;
        }

        h4 {
            text-indent: 4em;
        }

        h5 {
            text-indent: 6em;
        }
    </style>
</head>

<body>

    <h1>For-Loop Exercise</h1>

    <?php
    // Function to fetch user data from the JSONPlaceholder API
    function getUsers()
    {
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
    }

    // Get the list of users
    $users = getUsers();

    echo '<ul id="users">';

    for ($i = 0; $i < count($users); $i++) {

        echo '<li id="user-' . $users[$i]['id'] . '">';

        echo '<h2>' . 'ID: ' . $users[$i]['id'] . '</h2>';
        echo '<h3>' . 'Name: ' . $users[$i]['name'] . '</h3>';
        echo '<h3>' . 'Username: ' . $users[$i]['username'] . '</h3>';
        echo '<h3>' . 'Email: ' . '<a href="mailto:' . $users[$i]['email'] . '">' . $users[$i]['email'] . '</a>' . '</h3>';

        echo '<h3>' . 'Address: ' . '</h3>';
        echo '<h4>' . 'Street: ' . $users[$i]['address']['street'] . '</h4>';
        echo '<h4>' . 'Suite: ' . $users[$i]['address']['suite'] . '</h4>';
        echo '<h4>' . 'City: ' . $users[$i]['address']['city'] . '</h4>';
        echo '<h4>' . 'Zipcode: ' . $users[$i]['address']['zipcode'] . '</h4>';


        echo '<h4>' . 'Geo: ' . '</h4>';
        echo '<h5>' . 'Lat: ' . $users[$i]['address']['geo']['lat'] . '</h5>';
        echo '<h5>' . 'Lng: ' . $users[$i]['address']['geo']['lng'] . '</h5>';


        echo '<h3>' . 'Phone: ' . '<a href="tel:' . $users[$i]['phone'] . '">' . $users[$i]['phone'] . '</a>' . '</h3>';
        echo '<h3>' . 'Website: ' . '<a href="https://' . $users[$i]['website'] . '">' . $users[$i]['website'] . '</a>' . '</h3>';

        echo '<h3>' . 'Company: ' . '</h3>';
        echo '<h4>' . 'Name: ' . $users[$i]['company']['name'] . '</h4>';
        echo '<h4>' . 'Catch phrase: ' . $users[$i]['company']['catchPhrase'] . '</h4>';
        echo '<h4>' . 'BS: ' . $users[$i]['company']['bs'] . '</h4>';

        echo '</li>';

    }

    echo '</ul>';

    ?>

</body>

</html>