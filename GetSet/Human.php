<?php

// ========== магические методы, геттеры и сеттеры ==========

class Human
{
    public $name;
    public $age;
    public $gender;

    protected $weight;
    private $height;

    protected $missing = [];

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;

    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)){
            $this->$name = $value;
        } else {
            $this->missing[$name] = $value;
//            print_r('Property, not exist: ' . $name);
        }

    }

    public function __get($name)
    {
        if (property_exists($this, $name)){
            return $this->$name;
        } elseif (isset($this->missing[$name])){
            return $this->missing[$name];
        } else {
            print_r('Property, not found: ' . $name);
        }

    }

    public function __isset($name)
    {

        echo '<pre>';
        var_dump($name);
        echo '</pre>';
    }

    public function __clone()
    {
        $this->name .= ' duplicate';
    }

}

$human = new Human('Serg', 20, 'man');
$human->weight = '70kg';
$human->height = 185;
$human->www = 'abs';


//isset($human->name);

echo '<pre>';
echo $human->weight;
echo '</pre>';
echo '<pre>';
echo $human->height;
echo '</pre>';
echo '<pre>';
echo $human->www;
echo '</pre>';

$human2 = clone $human;

echo '<pre>';
var_dump($human);
echo '</pre>';

echo '<pre>';
var_dump($human2);
echo '</pre>';