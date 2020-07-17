<?php


require_once __DIR__. '/autoload.php';

$humanOne = new \One\Human();
$humanTwo = new \Two\Human();

$humanOne->saySpeak();
$humanTwo->sayHello();