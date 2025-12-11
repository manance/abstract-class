<?php

    // Tiek izsaukts galvenais fails ar abstrako klasi.
    require_once "Books.php";

    // Definē atvasināto klasi.
    class Horror extends Books {

        // Definē metodi.
        public function bookList() {

            // Izvada žanra nosaukumu.
            echo "Genre: " . $this->name . "<br><br>";

            // Izveido masīvu ar grāmatu nosaukumiem.
            $bookList = ["Drakula<br>", "Animal cemetary<br>", "Glitter<br><br>"];

            // Izvada visas grāmatas no mazīva.
            foreach ($bookList as $book){

                echo $book;

            }
        }    
    }

    // Polimorfisms šeit:
    // Šeit metodes rezultāts izvada
    // Drakula, Animal cemetary un 
    // Glitter.
?>