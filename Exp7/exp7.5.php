<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 7.3</title>
</head>
<body>
    <h1>Single Inheritance</h1>
    <?php
    class Base {
        function BaseFun(){
            echo "BaseFun() called <br>";
        }
    }
    class Derived1 extends Base {
        function Derived1Fun(){
            echo "Derived1Fun() called <br>";
        }
    }
    class Derived2 extends Derived1 {
        function Derived2Fun(){
            echo "Derived2Fun() called <br>";
        }
    }
    $obj = new Derived2();
    $obj->BaseFun();
    $obj->Derived1Fun();
    $obj->Derived2Fun();
    ?>
</body>
</html>