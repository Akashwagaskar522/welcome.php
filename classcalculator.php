<?php
class Calculator
{
public $num1;
public $num2;

function __construct($a, $b)
{
$this->num1 = $a;
$this->num2 = $b;
}

function add()
    {
        return $this->num1 + $this->num2;
    }

    function subtract()
    {
        return $this->num1 - $this->num2;
    }

    function multiply()
    {
        return $this->num1 * $this->num2;
    }
}

$calc = new Calculator(10, 5);
echo "Addition: " . $calc->add() . "<br>";
echo "Subtraction: " . $calc->subtract() . "<br>";
echo "Multiplication: " . $calc->multiply();
?>
