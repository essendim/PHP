<?php
    // for($i = 0; $i < 10; $i++){
    //     echo "\n - $i";
    // }


    // foreach ($eleves as $classe => $eleve ){
    //     echo "$eleve est dans la classe $classe\n";
    // }

    /*foreach ($eleves as $classe => $listEleves ){
        echo "La classe $classe\n";
        foreach($listEleves as $eleve){
            echo "- $eleve \n";
        }
        echo "\n";
    }*/
// foreach($notes as $addNotes){
//     $addNotes = (int)readline("Ajouter une note : ");
//     print_r($addNotes);
// }
/*
    Demande à l'utilisateur de rentrer une note ou de taper "fin"
    chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
    à la fin on affiche un tableau sous forme de liste 
*/ 

// TANT QUE L'UTILISATEUR NE TAPE PAS FIN
// Ajouter une note tapée au tableau au tableau note
// Pour chaque note dans notes
// On affiche "- note"

$notes = [];

$action = null;

while($action !== "fin"){
    $action = readline("Veuillez entrez une note : ");
    if($action !== "fin"){
        $notes[] = (int)$action;
    }
}

foreach($notes as $note){
    echo "- $note " ;
}

// $notes = [];  // Assuming $notes is initially an empty array or has existing values

// // You could add a loop to add multiple notes
// $numberOfNotes = (int)readline("Combien de notes voulez-vous ajouter ? ");

// for ($i = 0; $i < $numberOfNotes; $i++) {
//     // Ask for a note input for each iteration
//     $addNote = (int)readline("Ajouter une note : ");
//     $notes[] = $addNote;  // Add the new note to the array
// }

// print_r($notes);  // Print all the added notes
