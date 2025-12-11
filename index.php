<?php
    // Tiek izsaukti ar visi faili ar atvasinātajām klasēm.
    require_once "Horror.php";
    require_once "Fantasy.php";
    require_once "ScienceFiction.php";
    
    // Tiek izveidotas jaunas klases, kuru nosaukumi ir vienādi ar bērnu klašu nosaukumiem.
    // Tam, kas ir ievadīts pēdiņās, nav nozīmes, tur var tikt ievadīts jebkas cits.
    $horrorBooks = new Horror("Fantasy");
    $fantasyBooks = new Fantasy("Horror");
    $scienceFictionBooks = new ScienceFiction("Science Fiction");

    // Tiek izpildīta abstraktās metode.
    $horrorBooks->bookList();
    $fantasyBooks->bookList();
    $scienceFictionBooks->bookList();

?>