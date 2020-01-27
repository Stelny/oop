<?php

//Regular class

include_once 'classes/simpleclass.class.php';

$obj = new SimpleClass();
$obj->helloWorld();

//Anonymous class

$newObj = new class() {
    public function helloWorld() {
        echo "Hello World!";
    }
};
$newObj->helloWorld();