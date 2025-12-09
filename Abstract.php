<?php
    //Parent class
    abstract class Books {

        public $name;

        public function __construct($get_name) {
            $this->name = $get_name;
        }

    }

?>