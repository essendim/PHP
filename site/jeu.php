<?php
$aDeviner = 150;
require 'header.php';
?>
<?php//var_dump(value: $_SERVER)?>
<pre>
<?php 
    $error = null;
    $success = null;
    $value = null;
    if($_GET['chiffre']) {
        if($_GET['chiffre'] > $aDeviner){
            $error="Le chiffre est trop grand";
        }elseif($_GET['chiffre'] < $aDeviner){
            $error ="Le chiffre est trop petit";
        }else{
            $success = "Bravo ! Vous avez deviné le chiffre ! <strong>$aDeviner</strong>";
        }
    }
?>
<?php if($error):?>
    <div class="alert alert-danger">
        <?= $error?>
<?php elseif($success):?>
    <div class="alert alert-success">
        <?= $success?>
    </div>
<?php endif ?>
</pre>
<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="entre 0 et 1000" value="<?= htmlentities($_GET['chiffre'])?>">
    <input type="text" name="demo" value="test">
    <button type="submit">Deviner</button>
</form>

