<?php
class DISTANCE
{
public $feet;
public $inches;

function convert_feet_to_inch($feet)
{
return $feet*12;
}

function convert_inch_to_feet($inches)
{
return $inches/12;
}
}

$value=$_POST['value'];
$choice=$_POST['choice'];

$d=new DISTANCE();

echo "<h2>Conversion Result</h2>";

if($choice=="f2i") 
{
echo "Feet: $value <br>";
echo "Inches: ".$d->convert_feet_to_inch($value);
}

elseif($choice=="i2f") 
{
echo "Inches:$value<br>";
echo "Feet: ".$d->convert_inch_to_feet($value);
}
?>