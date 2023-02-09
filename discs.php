<?php

// recuperiamo il file con i dati
$source_url = __DIR__ . 'data.json';

// leggiamo il contenuto del file
$json_data = file_get_contents($source_url);


header('Content-Type:application/json');
echo json_encode($discs);
