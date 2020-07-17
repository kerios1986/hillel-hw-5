<?php

require_once __DIR__ . '/One/Human.php';
require_once __DIR__ . '/Two/Human.php';

$humanOne = new \One\Human();
$humanTwo = new \Two\Human();

$humanOne->saySpeak();
$humanTwo->sayHello();