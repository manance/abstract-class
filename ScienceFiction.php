<?php

    // Tiek izsaukts galvenais fails ar abstrako klasi.
    require_once "Books.php";

    // Definē atvasināto klasi.
    class ScienceFiction extends Books {

        // Definē metodi.
        public function bookList() {

            // Izvada žanra nosaukumu.
            echo "Genre: " . $this->name . "<br><br>";

            // Izveido masīvu ar grāmatu nosaukumiem.
            $bookList = ["Dune<br>", "Project hail mary<br>", "Children of time<br><br>"];

            // Izvada visas grāmatas no mazīva.
            foreach ($bookList as $book){

                echo $book;

            }
        }    
    }
    
    // Polimorfisms šeit:
    // Šeit metodes rezultāts izvada
    // Dune, Project haul mary un 
    // Children of time.
?>