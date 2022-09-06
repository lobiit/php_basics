<?php
class User {
    private $name;
    private $email;
    private $password;

    // A constructor
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name) {
        $this->name = $name;
    }

    function get_name($name) {
        return $this ->name;
    }
}

$ser1 = new User('rad', 'rad@gmail.com', 3456);
$ser1 ->set_name('lore');
var_dump($ser1);

// Inheritance

class Employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;

    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('sara', 'sara@gmail.com', 23445, 'manager');
var_dump($employee1);