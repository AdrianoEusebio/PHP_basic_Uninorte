<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    const MYCAR = "Volvo";
    echo MYCAR;

    define("cars", ["Alfa Romeo","BMW","Toyota"]);
    echo cars[0];

    define("Teste", "Welcome to W3Schools.com!");

    function myTest() {
    echo Teste;
    }

    myTest();
    ?>

</body>

</html>