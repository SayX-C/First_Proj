<?php
// print_r($var);

class first
{
    public $vr = array(
        212322, 2, 5, 2, 2, 5, 2, 55,
        "value" => 123,
        "valasdue" => "123q2",
        "valueas2w2" => "123wqe",
        "tumse" => "Naah ho payega",
    );
    protected $name = "afzal";
}

class second extends first
{
    public function get_array($vr)
    {
        var_dump($vr) . "<br/>";
    }
    public function job()
    {
        echo " ==>>" . "<br>";
        echo "<strong><h1> !!!</strong>statement <mark> nhi</mark> <em>feild</em> ooh!!!</h1>";
    }
    public function login($username, $password)
    {
        echo "$username " . " loged in" . "<br>";
        echo "$password " . " is your password" . "<br>";
    }
    public function new(){
        echo $this->name ;
    }
}



$second = new second();
$second->get_array($second->vr);
$second->job();
$second->login("sakib", "123");
$second->new();
