<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
public $name;
public $color;

function __construct($name,$color)
{
$this->name=$name;
$this->color=$color;
}
function get_details() {
echo "Name: " . $this->name. ". color: " . $this->color .".<br>";
}
}

$apple = new Fruit('Apple','Red');
$apple->get_details();

$banana = new Fruit('banana','yellow');
$banana->get_details();
?>

</body>
</html>