<?php

    // Tiek definēta abstraktā klase.
    abstract class Books {

        // Definē publisku mainīgo.
        public $name;

        // Konstruktors.
        public function __construct($get_name) {

            // Piešķir laukam vērtību.
            $this->name = $get_name;

        }

        // Norāda, ka šī metode tiks definēta visās atvasinātajās klasēs (polimorfisms);
        abstract public function bookList();

    }

    // Polimorfisms šajā gadījumā nozīmē, 
    // ka šīs vienas metodes rezultāti atšķirsies
    // katrā atvasinātajā klasē.
?>