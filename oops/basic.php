<?php

    class Fruit {

        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_color($color) {
            $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }

    }
    // creating obj
    $apple = new Fruit();
    // using instanceof
    var_dump($apple instanceof Fruit); // op bool(true)
    echo "<br>";
    // setting data using class-methods
    $apple->set_name('Apple');
    $apple->set_color('Red');
    // getting data
    echo "Name: " . $apple->get_name();
    echo "<br>";
    echo "Color: " . $apple->get_color();

?>