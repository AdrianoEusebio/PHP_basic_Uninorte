<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

    foreach ($car as $x => $y) {
      echo "$x: $y <br>";
    }
    ?>

</body>

</html>