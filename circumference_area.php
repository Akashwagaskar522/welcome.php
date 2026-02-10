<?php
class Circle
{
public $radius;
function __construct($r)
{
$this->radius=$r;
}
function find_circumference()
{
return 2*3.14*$this->radius;
}
function find_area()
{
return 3.14*$this->radius*$this->radius;
}
}

$radius=5;
$choice=1;

$circle= new Circle($radius);
if ($choice==1) {
echo "Area of Circle=".$circle->find_area();
}
 elseif ($choice==2) {
echo "Circumference of Circle=".$circle->find_circumference();
}
else {
echo "Invalid choice";
}
?>