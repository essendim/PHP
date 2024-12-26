<?php 
// function palindrome($mot){
//     $mot = strtolower(preg_replace('/[^a-z0-9]/i', '', $mot));

//     // On compare le mot à sa version inversée
//     return $mot === strrev($mot);
// }

// $mot = readline('Entrez un mot : ');

// if(palindrome($mot)){
//     strrev($mot);
//     echo"$mot est un palindrome";
// } else {
//     echo"$mot n'est pas un palindrome";
// }

// $mot = readline('Entrez un mot : ');
// $mot = strtolower($mot);

// if($mot === strrev($mot)){
//     echo "$mot est un palindrome";
// } else {
//     echo "$mot n'est pas un palindrome";
// }

// $note = [12, 14, 18];
// $sum = array_sum($note);
// $count = count($note);
// $moyenne = ($sum / $count);
// $arrondir = round($moyenne, 2);
// echo "Vous avez " . $arrondir . " de moyenne";

// $insultes = ['Merde', 'Con'];
// $censure = '*';
// $phrase = readline('Entrez une phrase : ');

// while (true) {
//     // Divise la phrase en mots
//     $mots = explode(' ', $phrase);

//     // Parcourt chaque mot et applique la censure
//     foreach ($mots as &$motUnique) {
//         if (in_array(needle: ucfirst(strtolower($motUnique)))) {
//             $motUnique = str_repeat($censure, strlen($motUnique)); // Remplace par des astérisques
//         }
//     }

//     // Recompose la phrase censurée
//     $phraseCensuree = implode(' ', $mots);
//     echo "Mot : $phraseCensuree\n";

//     // Demande un nouveau mot ou phrase
//     $mot = readline("Entrez un autre mot ou une phrase (ou tapez 'exit' pour quitter) : ");
//     if (strtolower($mot) === 'exit') {
//         break; // Quitte la boucle si l'utilisateur tape "exit"
//     }
// }

 $insultes = ['merde', 'con'];
 $asterisque = [];
 foreach($insultes as $insulte){
    $lettre = substr($insulte, 0, 1);
    $asterisque[] = $lettre . str_repeat('*',strlen($insulte) -1);
 }
 $phrase = readline('Entrez une phrase : ');
 $phrase = str_ireplace($insultes, $asterisque, $phrase);

//  foreach($insultes as $insulte){
//     $replace = str_repeat('*',strlen($insulte));
//     $phrase = str_replace($insulte, $replace, $phrase);

//  } 


 echo $phrase;
?>