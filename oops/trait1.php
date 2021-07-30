<?php

    /**
     * Here, we declare one trait: message1. Then, we create a class: Welcome. 
     * The class uses the trait, and all the methods in the trait will be available in the class.
     * 
     * If other classes need to use the msg1() function, simply use the message1 trait in those 
     * classes. This reduces code duplication, because there is no need to redeclare the same method 
     * over and over again.
     */

    // creating the trait
    trait message1 {
        public function msg1() {
            echo "OOP is fun! ";
        }
    }

    // using the trait
    class Welcome {
        use message1;
    }

    $obj = new Welcome();
    $obj->msg1();
?>