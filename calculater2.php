<html>
<body>

<FORM method=get action="Calculator.php">
Enter first value:<INPUT type=text name="a"><br>
Enter second value:<INPUT type=text name="b"><br>
<INPUT type=submit>
</form>
</body>
</html>

<?php

class Calculate
{
public $a;
public $b;

function __construct($a,$b)
{
$this->a=$a;
$this->b=$b;
}
public function add()
{
$c=$this->a+$this->b;
echo "Addition=$c<br>";
}
public function subtract()
{
$c=$this->a-$this->b;
echo "Subtraction=$c<br>";
}
public function multiply()
{
$c=$this->a*$this->b;
echo "Multiplication=$c";
}
public function div()
{
$c=$this->a/$this->b;
echo "Division=$c";
}
}

$x=$_GET['a'];
$y=$_GET['b'];

$calc=new Calculate($x, $y);

$calc->add();
$calc->subtract();
$calc->multiply();
$calc->div();
?>
