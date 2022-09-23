<?php

// dati
include __DIR__ . '/../db/dischi.php';

// formattiamo la risposta

$res = [
    'succes' => true,
    'response' => $dischi
];

// settiamo il content type

header('Content-Type: apllication/json');

// stampiamo in formato json

echo json_encode($res);