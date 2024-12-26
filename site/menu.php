<?php 
if(!function_exists('nav_item')) {
    function nav_item(string $lien, string $title, string $linkclasse = '') : string {
        // Définir la classe par défaut
        $classe = 'nav-item';
        
        // Ajouter la classe "active" si la page actuelle correspond au lien
        if ($_SERVER['SCRIPT_NAME'] === $lien) {
            $classe .= ' active'; // Ajouter un espace avant "active"
        }
        
        // Générer le HTML avec des valeurs échappées
        $html = '<li class="' . $classe . '">
                    <a href="'. $lien . '">' . $title . '</a>
                 </li>';
        return $html;
    }
}
?>
<?= nav_item('/index.php', 'Accueil', $class) ?>
<?= nav_item('/contact.php', 'Contact', $class) ?>
