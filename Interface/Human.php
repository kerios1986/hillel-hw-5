<?php


class Human implements HumanInterface, BazInterface
{

    public function bar()
    {
        // TODO: Implement bar() method.
    }

    public function baz()
    {
        // TODO: Implement baz() method.
    }

    public function some()
    {
        // TODO: Implement some() method.
    }
}

$class = new Human();

//=== проверка ===
if (!$class instanceof HumanInterface){
    die();
}
//=======

$class->bar();
$class->baz();


