<?php
    require "Livre.php";
    require "Auteur.php";

    $auteur1 = new Auteur("Hugo","Victor");
    $livre1 = new Livre("test1","2001/01/01",801,12.8,$auteur1);
    $livre2 = new Livre("test2","2001/01/01",801,12.8,$auteur1);
    // echo $livre1;
    var_dump($auteur1);
?>