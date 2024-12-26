<?php 

    function nav_item(string $lien, string $title, string $linkclass = '') : string {
        // Définir la classe par défaut
        $classe = 'nav-item';
        
        // Ajouter la classe "active" si la page actuelle correspond au lien
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe .= ' active'; // Ajouter un espace avant "active"
        }
        
        // Générer le HTML avec des valeurs échappées
        return <<< HTML
         <li class="$classe">
                    <a class ="$linkclass" href="$lien">$title</a>
                 </li>
        
HTML; 
    }
    function nav_menu($linkClass = ''){
        
       return 
            nav_item('/index.php', 'Accueil', $linkClass) .
            nav_item('/contact.php', 'Contact', $linkClass);
    }

?>