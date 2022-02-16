<?php 

require_once __DIR__ . '/classi/Utente.php';
require_once __DIR__ . '/classi/Prodotti.php';
require_once __DIR__ . '/classi/FasciaUtente.php';


$utente = new Utente('Oriana', 'Avitabile', 'oriana@mail.it', 'Via Etnea', 'Milano', new Card('16/02/2022',2627637,323)); 

$product = new Prodotti ("gel","per capelli","nivea", 20);
// var_dump($utente,$product);

$sconto = new FasciaUtente("bronzo");
var_dump($sconto->getSconto());


$utenteBronze = new Utente('Patrizia', 'Masci', 'patrizia@mail.com', 'Via crisafulli', 'Roma', new Card('16/02/2022',54567637,723)); 
    



$utenteSilver = new Utente('Davide', 'Di Mauro', 'davide@mail.it', 'Via Marco ', 'Milano', new Card('16/02/2022',262532737,923)); 

    

$utentePremium = new Utente('Luca', 'Guarnera', 'luca@mail.com', 'Via Galermo', 'Catania', new Card('16/02/2022',5347657,423)); 




?>