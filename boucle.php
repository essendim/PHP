<?php
    // for($i = 0; $i < 10; $i++){
    //     echo "\n - $i";
    // }

    $eleves = [
        "CM1" => ['Marc', 'Jean', 'Robert'],
        "CM2" => ['Joseph']
    ]

    foreach ($eleves as $classe => $listEleves ){
        echo "La classe $classe: \n";
    }