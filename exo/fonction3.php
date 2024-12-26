<?php

// function repondre_oui_non($phrase){
//     while(true){
//         $resultUser = readline($phrase . ' (o/n):');
//         if($resultUser === 'o'){
//             return true;
//         }elseif($resultUser === 'n'){
//             return false;
//         }
//     }
// }

function demander_creneau($phrase =null){
    while(true){
        $ouverture = (int)readline("Veuillez entrer une heure d'ouverture");
        if($ouverture >= 0 || $ouverture <=23){
            break;
        }   
    }
    while(true){
        $fermeture = (int)readline("Veuillez entrer une heure de fermeture");
        if($fermeture >= 0 || $fermeture <=23){
            break;
        } 
    }

    return [$ouverture, $fermeture];
}

// $resultat = repondre_oui_non('Voulez-vous continuer ?');
$creneau = demander_creneau();
$creneau2 = demander_creneau(phrase: "Veuillez entrer votre créneau");

var_dump($creneau, $creneau2);


