<?php

    /**
     * Here, we declare two traits: message1 and message2. Then, we create two 
     * classes: Welcome and Welcome2. The first class (Welcome) uses the message1 
     * trait, and the second class (Welcome2) uses both message1 and message2 traits 
     * (multiple traits are separated by comma).
     */

    // creating the traits
    trait message1 {
        public function msg1() {
            echo "OOP is fun! ";
        }
    }

    trait message2 {
        public function msg2() {
            echo "OOP reduces code duplication!";
        }
    }

    // using sigle trait
    class Welcome {
        use message1;
    }
    // using multiple traits
    class Welcome2 {
        use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();

    /**
     * op
     * OOP is fun!
     * OOP is fun! OOP reduces code duplication!
     */

?>