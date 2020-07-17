<?php


trait ExtendSome
{
    public function hello()
    {
        return __METHOD__;
    }
}

trait ExtendSomeMultiple
{
    use ExtendSome;
    public function multiple()
    {
        return __METHOD__;
    }

}

class human
{
    use ExtendSome, ExtendSomeMultiple;

    public function baz()
    {
        $this->multiple();
        return $this->hello();
    }
}

class Bar
{
    use ExtendSome;
    public function baz()
    {
        return $this->hello();
    }

}


$human = new Human();

var_dump($human->baz());
