<?php

// function bonjour($nom = null){
//     if($nom === null){
//         return 'bonjour';
//     } 

//     return 'bonjour '. $nom;
// }
// echo bonjour();
// echo bonjour('jean');

function repondre_oui_non($texte){
    $reponse = readline($texte . " (o/n) : ");

    while(true){
        if( $reponse === 'o'){
            return true;
        } elseif($reponse === 'n'){
            return false;
            break;
        }
    }


}

$resultat = repondre_oui_non('voulez-vous continuer');

var_dump($resultat);