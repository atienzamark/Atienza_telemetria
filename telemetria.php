<?php
$ping_prezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240,
18, 72];

$ping_prezzi[] = "55";

$ping_prezzi[] = "190";

$ping_prezzi[] = "12";

$ping_validi = [];

$pacchetti_persi = 0; 

foreach($ping_prezzi as $key => $value) {
    if($value==-1) {
        $pacchetti_persi++;
    } else($value>0) {
        $ping_validi[] = $value;
    }
}

$somma_ping = 0;
$count = 0;
$ping_minimo = null;
$ping_massimo = null;

foreach($ping_validi as $ping) {
    $somma_ping += $ping;
    $count++;

    if($ping < $ping_minimo) {
        $ping_minimo = $ping;
    }

    if($ping > $ping_massimo) {
        $ping_massimo = $ping;
    }
}

?>