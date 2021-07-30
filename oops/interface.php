<?php

    /**
     * Cat, Dog and Mouse are all classes that implement the Animal interface, which means 
     * that all of them are able to make a sound using the makeSound() method. Because of this, 
     * we can loop through all of the animals and tell them to make a sound even if we don't know 
     * what type of animal each one is.
     * 
     * Since the interface does not tell the classes how to implement the method, each animal can 
     * make a sound in its own way.
     */

    // Interface definition
    interface Animal {
        public function makeSound();
    }

    // Class definitions
    class Cat implements Animal {
        public function makeSound() {
            echo " Meow ";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
            echo " Bark ";
        }
    }

    class Mouse implements Animal {
        public function makeSound() {
            echo " Squeak ";
        }
    }

    // Create a list of animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);

    // Tell the animals to make a sound
    foreach($animals as $animal) {
    $animal->makeSound();
    }

?>