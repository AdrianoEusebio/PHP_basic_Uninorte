<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    $d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    }

    switch ($d) {
        default:
            echo "Looking forward to the Weekend";
            break;
        case 6:
            echo "Today is Saturday";
            break;
        case 0:
            echo "Today is Sunday";
    }

    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
        case "blue":
            "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>

</body>

</html>