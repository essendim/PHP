<?php
    // $eleve = [
    //     'nom' => 'Doe',
    //     'prenom'=> 'John',
    //     'notes' => [18, 16, 15]
    // ];
    // echo $eleve['nom'];

    $classe = [
        [
            'nom' => 'Doe',
            'prenom'=> 'John',
            'notes' => [18, 16, 15]
        ],[
            'nom' => 'Doe',
            'prenom'=> 'John',
            'notes' => [18, 16, 15]
        ]
    ];
    echo $classe[1]['notes'];