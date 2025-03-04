<?php
//after php 5 one cam write php either in procedurl or object oriendted way.
class user
{
    public $name;
    public $email;
    public $password;
    //constructor is function that runs when an object is created
    public function __construct($name, $email, $password)
    {
        echo 'constructor ran';
        $this->name = $name;
        $this->email = $email;
        $this->$password = $password;
    }


    function setname($name) //setter function
    {
        $this->name = $name;
    }
    function getname()
    {
        return $this->name;
    }
}
//instaniate a user object
$user1 = new user('cal', 'cal@gmail.com', '123'); //this will run the constructer

var_dump($user1); //it displays object(user)#1 (3) { ["name"]=> NULL ["email"]=> NULL ["password"]=> NULL }
$user1->name = 'brad'; //give value for name 
$user1->setname('milk');
echo $user1->getname();

var_dump($user1);
//inheritance
class employee extends user
{
    public $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password); //we dont need to reintialize the parent class components
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}
$employee1 = new employee('sara', 'sara@gmail.com', '123', 'chief');
echo $employee1->name;
echo $employee1->get_title();
