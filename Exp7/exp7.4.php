<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 7.4</title>
</head>
<body>
    <h1>Multiple Inheritance</h1>
   <?php
class World{
    public function sayHello(){
        echo "Hello";
    }
}
trait forWorld{
    public function sayFor(){
        echo " World";
    }
}
class sample extends world{
    use forWorld;
    public function sayHie(){
        echo "<br>Hie World";
    }
}
$test = new sample();
$test->sayHello();
$test->sayFor();
$test->sayHie();
   ?> 
</body>
</html>