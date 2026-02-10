<?php
interface FacultyDetails
{
public function displayFaculty();
}
class College
{
public $collegeName;
public $collegeAddress;

function __construct($cname,$caddress)
{
$this->collegeName=$cname;
$this->collegeAddress=$caddress;
}
}
class Department extends College
{
public $deptName;
function __construct($cname,$caddress,$dname)
{
parent::__construct($cname,$caddress);
$this->deptName=$dname;
}
}

class Faculty extends department implements FacultyDetails
{
public $facultyName;
public $subject;

function __construct($cname,$caddress,$dname,$fname,$subject)
{
parent::__construct($cname,$caddress,$dname);
$this->facultyName=$fname;
$this->subject=$subject;
}

public function displayFaculty()
{
echo "College Name:".$this->collegeName."<br>";
echo "College Address:".$this->collegeAddress."<br>";
echo "Department Name:".$this->deptName."<br>";
echo "Faculty Name:".$this->facultyName."<br>";
echo "Subject:".$this->subject."<br>";
}
}

$faculty= new Faculty(
"ABC College",
"Pune",
"Computer Science",
"Dr.Rahul Patil",
"PHP Programming"
);

$faculty->displayFaculty();
?>
