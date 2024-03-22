<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 7.2</title>
</head>
<body>
    <?php
class rectangle{
    var $height;
    var $width;
    function __construct($arg1,$arg2){
        $this->height = $arg1;
        $this->width = $arg2;
    }
    function show(){
        echo "Parameterized Constructor : <br>";
        echo "Height = ".$this->height." Width = ".$this->width;
    }
}
$obj = new rectangle(10,20); 
$obj->show();
    ?>
</body>
</html>