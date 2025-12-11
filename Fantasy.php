<?php

    // Tiek izsaukts galvenais fails ar abstrako klasi.
    require_once "Books.php";

    // Definē atvasināto klasi.
    class Fantasy extends Books {

        // Definē metodi.
        public function bookList() {

            // Izvada žanra nosaukumu.
            echo "Genre: " . $this->name . "<br><br>";

            // Izveido masīvu ar grāmatu nosaukumiem.
            $bookList = ["Hobbits<br>", "Game of thrones<br>", "Lord of the rings<br><br>"];

            // Izvada visas grāmatas no mazīva.
            foreach ($bookList as $book){

                echo $book;

            }
        }
    }

    // Polimorfisms šeit:
    // Šeit metodes rezultāts izvada
    // Hobits, Game of thrones un 
    // Lord of the rings.
?>