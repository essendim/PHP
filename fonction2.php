<?php

// function bonjour($nom = null){
//     if($nom === null){
//         return 'bonjour';
//     } 

//     return 'bonjour '. $nom;
// }
// echo bonjour();
// echo bonjour('jean');

// function repondre_oui_non($texte){
//     $reponse = readline($texte . " (o/n) : ");

//     while(true){
//         if( $reponse === 'o'){
//             return true;
//         } elseif($reponse === 'n'){
//             return false;
//             break;
//         }
//     }
// }

// $resultat = repondre_oui_non('voulez-vous continuer');


function demander_creneau($phrase = "Veuillez entrer un creneau")
{
    $phrase . "\n";
    while (true) {
        $heureDebut = (int) readline(prompt: "Veuillez une heure de début :");

        if ($heureDebut >= 0 && $heureDebut <= 23) {
            break;
        }
    }

    while (true) {
        $heureFin = (int) readline("Veuillez une heure de fin :");

        if ($heureFin >= 0 && $$heureFin <= 23 && $heureFin > $heureDebut) {
            break;
        }
    }
    return [$heureDebut, $heureFin];


}

$creneau = demander_creneau();
$creneau2 = demander_creneau("Veuillez entrer un créneau ?");

var_dump($creneau, $creneau2);