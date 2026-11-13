<?php

/* contaPacchettiPersi accetta un array di interi e restituisce un numero intero */
function contaPacchettiPersi(){
    $pacchetti_persi=0;

    foreach($ping_grezzi as $ping){
        if($ping == -1){
            $pacchetti_persi++;
        }
    }

    return $pacchetti_persi;

}
//pacchettiValidi accetta un array di interi e restituisce un array di interi
function pacchettiValidi($ping_grezzi){
    $ping_validi = [];

    foreach($ping_grezzi as $ping){
        // O(n)
        if($ping > 0){
            $ping_validi[] = $ping;
        }

        return $ping_validi;

    }

}

// calcolaTempoMedio accetta un array di interi e restituisce un double (2 decimali)
function calcolaTempoMedio($ping_validi){
    $somma = 0;
    $cont = 0;
    $media=0;

    foreach($ping_validi as $ping){
        $somma+=$ping;
        $cont++;
    }

    $media = $somma / $cont;

    return round($media, 2);
}
// eleborazione dei dati ->  Backend
$ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240,18, 72];

array_push($ping_grezzi,55,190,12);

$ping_validi=pacchettiValidi($ping_grezzi);
$tempo_medio= calcolaTempoMedio($ping_validi);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--visualizzazione dei dati -> Frontend -->
    
</body>
</html>