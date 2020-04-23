<?php

// MILESTONE 1
    $data = [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322];//Importo quello che mi serve
    $datajson = json_encode($data); //Lo codifico qui in data.php in json

// MILESTONE 2
    $graphs = [
        'fatturato' => [
            'type' => 'line',
            'data' => [1000,1322,1123,2301,3288,988,502,2300,5332,2300,1233,2322],
            'access' => 'guest'
        ],
        'fatturato_by_agent' => [
            'type' => 'pie',
                'data' => [
                'Marco' => 9000,
                'Giuseppe' => 4000,
                'Mattia' => 3200,
               'Alberto' => 2300
           ],
           'access' => 'employee' 
        ]
    ];
 ?>
