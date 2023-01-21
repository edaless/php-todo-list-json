<?php
// corse policy
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Originn: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");



header('Content-Type: application/json');

// salvo nella variabile $index ciò che viene passato alla chiamata dell'api
$index = $_GET['index'];

// recupero la stringa nel file json
$jsonTodoList = file_get_contents("todo.json", true);
// la trasformo in un array php
$todoList = json_decode($jsonTodoList);

// formo un nuovo array che non conterrà l'elemento alla posizione index.
$newTodoList = [];

// aggiungo i componenti prima di quello alla posizione index
foreach ($todoList as $key => $componente) {
    if ($key != $index)
        $newTodoList[] = $componente;
};






// trasformo il NUOVO array php in una stringa json
$jsonNewTodoList = json_encode($newTodoList);
// popolo il file di questra nuova stringa
file_put_contents("todo.json", $jsonNewTodoList);
