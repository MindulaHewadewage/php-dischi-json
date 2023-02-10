<?php

// recuperiamo il file con i dati
$source_url = __DIR__ . '/data.json';

// leggiamo il contenuto del file
$json_data = file_get_contents($source_url);

// dico al server che voglio scrivere in json
header('Content-Type:application/json');

// converto in json
echo $json_data;
