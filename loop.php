<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    $i = 1;

    //while
    while ($i < 6) {
        echo $i;
        $i++;
    }

    //do-while
    do {
        echo $i;
        $i++;
    } while ($i < 6);

    //for
    for ($i = 0; $i <= 10; $i++) {
        echo "The number is: $x <br>";
    }

    //foreach
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
        echo "$x <br>";
    }
    ?>

</body>

</html>