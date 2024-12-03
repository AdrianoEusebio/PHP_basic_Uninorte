<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    $t = 14;

    if ($t == 14) {
        echo "Have a good day!";
    } else{
        echo "Have a bad day!";
    }

    $a = 200;
    $b = 33;
    $c = 500;

    if ($a < 10) $b = "Hello";

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    } else{
        echo "$a is a number not between 2 and 7";
    }
    ?>

</body>

</html>