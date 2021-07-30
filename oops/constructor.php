<?php
    
    // same example with constructor
    class FruitC {

        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function get_name() {
            return $this->name;
        }

        function get_color() {
            return $this->color;
        }

    }

    // setting data with constructor
    $apple = new FruitC("Apple", "red");
    // getting data
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();

    /**
     * we are having two same classes in the same env. that's why renamed them
     */

?>