<?php

$dane_bazowe = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

function odczytaj_komorke($tablica, $numer_komorki) {
    return $tablica[$numer_komorki];
}

echo "2.1<br>" . odczytaj_komorke($dane_bazowe, 4) . "<br>";
print_r($dane_bazowe);
echo "<br>";

function zmien_komorke($tablica, $numer_komorki, $nowa_wartosc) {
    $tablica[$numer_komorki] = $nowa_wartosc;
    return $tablica;
}

$dane_bazowe = zmien_komorke($dane_bazowe, 6, 12);
echo "2.2";
print_r($dane_bazowe);
echo "<br>";

function skopiuj_tablice($zrodlo) {
    $kopia = array();
    for ($i = 0; $i < count($zrodlo); $i++) {
        $kopia[$i] = $zrodlo[$i];
    }
    return $kopia;
}

$tablica_kopia = skopiuj_tablice($dane_bazowe);
echo "3.1";
print_r($tablica_kopia);
echo "<br>";

function sumuj_indeksy($tablica_a, $tablica_b) {
    $suma = array();
    for ($i = 0; $i < count($tablica_a); $i++) {
        $suma[$i] = $tablica_a[$i] + $tablica_b[$i];
    }
    return $suma;
}

$tablica_sum = sumuj_indeksy($dane_bazowe, $tablica_kopia);
echo "3.2";
print_r($tablica_sum);
echo "<br>";

function odwroc_kolejnosc_i_przepisz($zrodlo) {
    $odwrocona = array();
    $dlugosc = count($zrodlo);
    for ($i = 0; $i < $dlugosc; $i++) {
        $odwrocona[$i] = $zrodlo[$dlugosc - 1 - $i];
    }
    return $odwrocona;
}

$tablica_kopia = odwroc_kolejnosc_i_przepisz($dane_bazowe);
echo "3.3";
print_r($tablica_kopia);
echo "<br>";

function oblicz_srednia($tablica) {
    $suma = 0;
    for ($i = 0; $i < count($tablica); $i++) {
        $suma += $tablica[$i];
    }
    return $suma / count($tablica);
}

echo "4.1" . oblicz_srednia($dane_bazowe) . "<br>";
print_r($dane_bazowe);
echo "<br>";

function znajdz_maksimum($tablica) {
    $maksimum = $tablica[0];
    for ($i = 1; $i < count($tablica); $i++) {
        if ($tablica[$i] > $maksimum) {
            $maksimum = $tablica[$i];
        }
    }
    return $maksimum;
}

echo "4.2<br>" . znajdz_maksimum($tablica_sum) . "<br>";
print_r($tablica_sum);
echo "<br>";

?>
