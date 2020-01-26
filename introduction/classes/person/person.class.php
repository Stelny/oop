<?php
 //Private - muze byt jen v classe
 //Protected - Muze byt pouzita jen v classe a nebo v te ktera ji extendi
 //public - Muze byt volne pouzita
 // STAtic self::$bla
 //non static $this->bla

namespace Person;
 
class Person {
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    /*public static $drinkingAge = 21;
    
    // Methods
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }  public function getDA() {
        return self::$drinkingAge;
    }
    
    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }  
    */

   
    public function setName(string $newName) {
        $this->name = $newName; 
    }
    
    public function getName() {
        return $this->name;
    }
    
}