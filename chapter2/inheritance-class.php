<?php

class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Customer extends User
{
}

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Hakim';

echo $c->fullName() . "<br />";

if (is_subclass_of($c, 'User')) {
    echo "Instance Custommer merupakan subclass Class User <br />";
}

$parents = class_parents($c);
echo implode(',', $parents);

?>
