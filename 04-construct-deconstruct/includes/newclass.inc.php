<?php 
    class NewClass {

        // Properties
        public $data;

        public function __construct() {
            echo "<br> This class has been Instantiated";
        }

        // Methods goes here
        public function setNewProperty($newdata) {
            $this->data = $newdata;
        }

        public function getProperty() {
            return $this->data;
        }

        public function __destruct() {
            echo "<br> This is the end of the class!";
        }
    }
