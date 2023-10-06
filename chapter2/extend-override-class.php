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
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullName()
    {
        return $this->firstName . ', ' . $this->lastName . '(customer)';
    }
}

$u = new Customer;
$u->firstName = 'Abdul';
$u->lastName = 'Aziz';
// $u->city = 'Banjarbaru';
// $u->country = 'Indonesia';

echo $u->fullName() . "<br />";
// echo $c->location() . "<br />";

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Hakim';
$c->city = 'Banjarbaru';
$c->country = 'Indonesia';

echo $c->fullName() . "<br />";
echo $c->location() . "<br />";

if (is_subclass_of($c, 'User')) {
    echo "Instance Custommer merupakan subclass Class User <br />";
}

$parents = class_parents($c);
echo implode(',', $parents);

?>
