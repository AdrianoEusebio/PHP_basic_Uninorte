<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars); //contagem do array
    var_dump($cars); // tipo dos dados do array
    echo $cars[0]; // print de apenas um dado
    $cars[1] = "Ford"; // atribuição de dado a um slot

    foreach ($cars as $x) { // loop foreach
        echo "$x <br>";
    }

    $myArr = array("Volvo", 15, ["apples", "bananas"]); // array com dados variados
    
    $car = [ // array com key
        0 => "Volvo",
        "model" => "BMW",
        2 =>"Toyota"
      ];
    ?>

</body>

</html>