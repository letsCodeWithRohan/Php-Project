<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment 7.1</title>
</head>
<body>
    <?php
class Fruit{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name()."<br>".$banana->get_name();
    ?>
</body>
</html>