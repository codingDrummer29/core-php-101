<?php
/**
 * Here, we declare a static method: welcome(). Then, we call the static method 
 * by using the class name, double colon (::), and the method name (without creating 
 * an instance of the class first).
 */

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>