<?php 

require_once 'classi/Utente.php';
require_once 'classi/Prodotti.php';

// require_once 'classi/fasciaUtente.php';
// require_once 'classi/card.php';

$utente = new Utente('Oriana', 'Avitabile', 'oriana@mail.it', 'Via Etnea', 'Milano', new Card('16/02/2022',2627637,323)); 
var_dump($utente);


$utenteBronze = new Utente('Patrizia', 'Masci', 'patrizia@mail.com', 'Via crisafulli', 'Roma', new Card('16/02/2022',54567637,723)); 
    
var_dump($utenteBronze);


$utenteSilver = new Utente('Davide', 'Di Mauro', 'davide@mail.it', 'Via Marco ', 'Milano', new Card('16/02/2022',262532737,923)); 
var_dump($utenteSilver);
    

$utentePremium = new Utente('Luca', 'Guarnera', 'luca@mail.com', 'Via Galermo', 'Catania', new Card('16/02/2022',5347657,423)); 
var_dump($utentePremium);



?>