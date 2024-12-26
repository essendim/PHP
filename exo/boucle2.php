<?php
/* On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
   On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
*/

// On demande à l'utilisateur de rentrer un créneau
   // On demande l'heure de début
   // On demande l'heure de fin
   // On vérifie si l'heure de début < l'heure de fin
   // On demande si l'on veut rajouter un nouveau créneau (o/n) 
// On demande à l'utilisateur de rentrer une heure
//On affiche l'état d'ouverture du magasin

$créneauHeure = [];


while(true){
   $heureDebut = (int)readline("Veuillez une heure de début :");
   $heureFin = (int)readline("Veuillez une heure de fin :");
   if($heureDebut >= $heureFin) {
      echo"Le créneau ne peut pas être enregistrés car l'heure de d'ouverture ($heureDebut) est supérieur à l'heure de fin($heureFin)";
   } else {
      $créneauHeure[] = [$heureDebut, $heureFin];
      $action = readline("voulez vous entrer un nouveau créneau (o/n) :");
      if($action === 'n'){
         break;
      }
   }

}
echo 'Le magasin est ouvert de ';
foreach ($créneauHeure as $k => $creneau){
   if($k > 0){
      echo " et de ";
   }
   echo "{$creneau[0]}h à {$creneau[1]}h";
}

   /*
   $heure= readline("A quelle heure voulez-vous visiter le magasin ?");

   foreach ($créneauHeure as $creneau){
      if($heure >= $créneau[0] && $heure <= $creneau[1]){
         $creneauTrouve=true;
         break;
      }
   }

   if($creneauTrouve){
      echo "Le magasin est ouvert";
   }else{
      echo "Le magasin est fermé";
   }
*/