<?php

    //Parent 
    //Self

    class FirstClass {
        
        const EXAMPLE = "Nejde změnit";

        public static function test() {
            $test = "To je test";
            return $test;
        }
    }

    class SecondClass extends FirstClass {
        //Properties
        public static $staticProperty = "A static property";

        //Methods
        public static function anotherTest() {
            echo parent::EXAMPLE;
            echo self::$staticProperty;
        }
    }

    /*$a = FirstClass::EXAMPLE;
    echo $a;*/
    /*$a = SecondClass::test();
    echo $a;*/

    $b = SecondClass::anotherTest();
    echo $b;