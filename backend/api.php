<?php
// corse policy
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");



header('Content-Type: application/json');



$testObj = [
    [
        "text" => "Obj1",
        "valore" => 2000
    ],
    [
        "text" => "Obj2",
        "valore" => 3000
    ],
    [
        "text" => "Obj3",
        "valore" => 3300
    ],
    [
        "text" => "Obj4",
        "valore" => 3400
    ],
    [
        "text" => "emanuele",
        "valore" => "d'alessandro"
    ]
];


echo json_encode($testObj);
