<?php
    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting Kolkata";
        public function byebye() {
            echo self::LEAVING_MESSAGE;
        }
    }

    // echo Goodbye::LEAVING_MESSAGE;
    $goodbye = new Goodbye();
    $goodbye->byebye();
?>