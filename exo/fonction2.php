<?php

// function bonjour($nom = null){
//     if($nom === null){
//         return 'bonjour';
//     } 

//     return 'bonjour '. $nom;
// }
// echo bonjour();
// echo bonjour('jean');

function repondre_oui_non($texte)
{
    $reponse = readline($texte . " (o/n) : ");

    while (true) {
        if ($reponse === 'o') {
            return true;
        } elseif ($reponse === 'n') {
            return false;
            break;
        } else {
            // Demander à nouveau si la réponse n'est pas 'o' ou 'n'
            $reponse = readline($texte . " (o/n) : ");
        }
    }
}
function demander_creneau($phrase = "Veuillez entrer un créneau")
{
    echo $phrase . "\n"; // Affichage de la phrase avant la saisie

    // Saisie de l'heure de début
    while (true) {
        $heureDebut = (int) readline("Veuillez entrer une heure de début (0-23) : ");
        if ($heureDebut >= 0 && $heureDebut <= 23) {
            break;
        } else {
            echo "Heure invalide. Veuillez entrer une heure entre 0 et 23.\n";
        }
    }

    // Saisie de l'heure de fin
    while (true) {
        $heureFin = (int) readline("Veuillez entrer une heure de fin (0-23) : ");
        if ($heureFin >= 0 && $heureFin <= 23 && $heureFin > $heureDebut) {
            break;
        } else {
            echo "L'heure de fin doit être supérieure à l'heure de début et comprise entre 0 et 23.\n";
        }
    }

    return [$heureDebut, $heureFin];
}

function demander_creneaux($phrase)
{
    $creneaux = [];
    $phrase . '\n';
    do {
        $creneaux[] = demander_creneau();
    } while (repondre_oui_non('voulez-vous ajouter un autre créneau'));
    return $creneaux;
}

$creneaux = demander_creneaux('Entrez votre creneau: ');

var_dump($creneaux);
