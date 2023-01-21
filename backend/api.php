<?php
// corse policy
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Originn: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");



header('Content-Type: application/json');


$jsonTodoList = file_get_contents("todo.json", true);

// questo non serve perché la stringa è già in json
// $todoList = json_decode($jsonTodoList);



echo $jsonTodoList;
