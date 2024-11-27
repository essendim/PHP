<?php

$heure = (int)readline("Entrez une heure: ");

if((9 <= $heure && $heure <= 12) || (14 <= $heure  && $heure <= 17)){
    echo 'Le magasin est ouvert';
}else{
    echo 'Le magasin est férmé';
}

// $action = (int)readline("Entrez votre action : (1 : attaquer, 2 : défendre, 3 : je passe mon tour)");
// if($action === 1){
//     echo 'j\'attaque';
// }elseif($action === 2) {
//     echo 'je défends';
// } elseif($action === 3){
//     echo 'je passe mon tour';
// }else {
//     echo 'Commande inconnue';
// }