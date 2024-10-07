<?php

class Animals {

    

    //Constructor = selalu dijalankan 
    public function __construct()
    {
        echo "Hello, I'm Initalized \n";
    }
    protected int $age; //hanya bisa di dalam class
    private int $weight; // ga bisa di akses di dalam dan luar class

    public function setAge()
    {
        $this->age = 12;
        echo $this->age;
    }
    public string $name;
    public string $color;

    public function jump()
    {
        echo"I'm jumping";
    }

    public function sound (string $type)
    {
        echo "I'm {$type}";
    }
    public function getName(){
        echo $this ->name;
    }
}

$dog = new Animals (); // object intance
$dog ->name = "Pibul";
$dog ->color = "Brown";

$cat = new Animals();
$cat-> name = "Persia";
$cat -> color = "Orange";


// var_dump($dog);
// $dog -> jump();
$dog ->getName();
echo"\n";
$dog -> sound("Barking");

echo "\n"; //new line

// var_dump($cat);
// $cat -> jump();
$cat ->getName();
echo "\n";
$cat -> sound("Meongg");