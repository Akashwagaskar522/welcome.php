<?php
class Student
{
public $rollNo=101;
public $name="Akash";
public $course="BBA";

public function showDetails()
{
echo "Student Details";
}

public function getCourse()
{
return $this->course;
}
}

$stud = new Student();

echo "<h3>Declared Classes:</h3>";
$classes = get_declared_classes();
foreach ($classes as $class) {
echo $class . "<br>";
}

echo "<h3>Method of student class:</h3>";
$methods = get_class_methods("Student");
foreach ($methods as $method) {
echo $method . "<br>";
}

echo "<h3>Variable of Student class:</h3>";
$vars = get_class_vars("Student");
foreach ($vars as $var => $value) {
echo $var . "=" .$value . "<br>";
}
?>