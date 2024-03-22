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
    class Derived extends Base {
        function DerivedFun(){
            echo "DerivedFun() called <br>";
        }
    }
    $obj = new Derived();
    $obj->BaseFun();
    $obj->DerivedFun();
    ?>
</body>
</html>