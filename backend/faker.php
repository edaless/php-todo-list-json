<?php


$todoList = [

    [
        "text" => "qualcosa",
        "completed" => false
    ],
    [
        "text" => "qualcosaltro",
        "completed" => false
    ],
    [
        "text" => "qualcorrrrrr",
        "completed" => false
    ],
    [
        "text" => "qualwewewew",
        "completed" => false
    ],
    [
        "text" => "qukujununbr",
        "completed" => false
    ]

];


$jsonTodoList = json_encode($todoList);

file_put_contents("todo.json", $jsonTodoList);
