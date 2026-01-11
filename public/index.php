<?php

use App\Kernel;

 // //Chargement de l'autochargeur des classes de composer
 require __DIR__ . "/../Vendor/autoload.php";


 //je peux donc maintenant utiliser ça car j'ai mis au préalable l'autochargeur
// dd("Hello world"); //la fonction dd vient de symfony dans le dossier vendor

   $kernel = new Kernel;
   $kernel->boot();

// use App\Classes\Chat;
// use App\Classes\Chien;



// //Chargement de l'autochargeur des classes de composer
//     require __DIR__ . "/../Vendor/autoload.php";

//     $chien = new Chien;
//     echo $chien->seNourrir();

//     echo "<br>";
    
//     $chat = new Chat;
//     echo $chat->dormir();



