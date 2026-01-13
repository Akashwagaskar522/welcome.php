<?php
$xml= new SimpleXMLElement("<student></student>");

$student1=$xml->addChild("student");
$student1->addChild("rollno","101");
$student1->addChild("name","akash wagaskar");
$student1->addChild("address","pune");
$student1->addChild("college","BJS college");
$student1->addChild("course","BBA");

$student2=$xml->addChild("student");
$student2->addChild("rollno","102");
$student2->addChild("name","dipak");
$student2->addChild("address","Wagholi");
$student2->addChild("college","BJS college");
$student2->addChild("course","BBA");

$student3=$xml->addChild("student");
$student3->addChild("rollno","103");
$student3->addChild("name","anil");
$student3->addChild("address","Kesnand");
$student3->addChild("college","BJS college");
$student3->addChild("course","BBA");

$xml->asXML("student.xml");
echo "student.xml file created successfully";
?>