<?php
// corse policy
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Originn: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");



header('Content-Type: application/json');

// salvo nella variabile $text ciò che viene passato alla chiamata dell'api
$text = $_GET['text'];

// recupero la stringa nel file json
$jsonTodoList = file_get_contents("todo.json", true);
// la trasformo in un array php
$todoList = json_decode($jsonTodoList);

// vi aggiungo la task nuova inizializzata a NON COMPLETATA
$todoList[] = [
    "text" => $text,
    "completed" => false
];



// ritrasformo l'array php in una stringa json
$jsonTodoList = json_encode($todoList);
// popolo il file di questra nuova stringa
file_put_contents("todo.json", $jsonTodoList);
