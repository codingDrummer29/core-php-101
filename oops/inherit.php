<?php

    class FruitI {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro() {
        // protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    // Strawberry is inherited from Fruit
    class Strawberry extends FruitI {
        public function message() {
            echo "Am I a fruit or a berry? ";

            $this->intro();
            // if intro made protected, obj>intro() muted then derived func()
            // executes inherited class's protected func() with no error
        }
    }

    // setting
    $strawberry = new Strawberry("Strawberry", "red");
    // getting
    $strawberry->message();
    $strawberry->intro(); // throws error if intro() is !public

    // op Am I a fruit or a berry? The fruit is Strawberry and the color is red.

    /**
     * The Strawberry class is inherited from the Fruit class.
     * 
     * This means that the Strawberry class can use the public $name and $color properties 
     * as well as the public __construct() and intro() methods from the Fruit class because 
     * of inheritance.
     * 
     * The Strawberry class also has its own method: message().
     */

?>