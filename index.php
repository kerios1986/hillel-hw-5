<?php

require_once  __DIR__ . '/vendor/autoload.php';

$obj = new \App\Test\Foo();
$obj2 = new \App\Bar\Bar();

dump($obj->say());

new WithOutNamespace;

dump(sayHi());
dd($obj2->say());