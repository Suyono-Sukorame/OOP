<?php

class User
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    private $level = 'User';

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function sayProtect()
    {
        return "Hello, Protected";
    }

    private function sayPrivate(){
        return "Hello, Private";
    }
}

class Customer extends User
{
    public function sayParent()
    {
        return $this->sayProtect();
    }
}


$u = new User;
$u->firstName = 'User';
$u->lastName = 'Class';

// echo $u->regID . "<br/>";
// echo $u->level . "<br/>";

echo $u->fullName() . "<br/>";
// echo $u->sayProtect() . "<br/>";
// echo $u->sayPrivate() . "<br/>";

$c = new Customer;
$c->firstName = 'Customer';
$c->lastName = 'Hakim';

echo $c->fullName() . "<br />";
echo $c->sayParent() . "<br />";

?>
