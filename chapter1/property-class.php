<?php
class Student
{
    var $name;
    var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Aziz'; 
$student2->name = 'Hakim';

echo $student1->name . "<br />";
echo $student2->name . "<br />";

$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

if (property_exists('Student', 'name')) {
    echo "Property name tersedia";
} else {
    echo "Property name tidak tersedia";
}

?>
