<?php
// =========== Наследование с перегрузкой ===========

class Humans
{
    public $hear = 'wind';

    public function speak()
    {
        return 'I can speak';
    }
}

class African extends Humans
{
    public function speak()
    {
        $msg = parent::speak();
        echo 'Our parent message is: ' . $msg . 'and our message is: we can see';
        echo "<br>";
    }

    public function sayHello()
    {
        echo 'Hello'. "<br>";
    }
}

class European extends African
{
    public function canWalk()
    {
        echo 'I can walk' . "<br>";
    }
}

//$base = new Humans();
//$base->hear;
////$base->sayHelloo (не может скзать)
//$base->speak();

$african = new African();
//$african->hear;
$african->speak();
$african->sayHello();
//$african->canWalk (не может ходить)

//$european = new European();
//$european->hear;
//$european->speak();
//$european->sayHello();
//$european->canWalk();