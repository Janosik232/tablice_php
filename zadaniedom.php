<?php

$dane = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

function odczytaj($tab, $numer) {
    return $tab[$numer];
}

echo "2.1<br>" . odczytaj($dane, 4) . "<br>";
print_r($dane);
echo "<br>";

function zmien($tab, $numer, $nowa_val) {
    $tab[$numer] = $nowa_val;
    return $tab;
}

$dane = zmien($dane, 6, 12);
echo "2.2";
print_r($dane);
echo "<br>";

function skopiuj_tab($zrodlo) {
    $kopia = array();
    for ($i = 0; $i < count($zrodlo); $i++) {
        $kopia[$i] = $zrodlo[$i];
    }
    return $kopia;
}

$tab_kop = skopiuj_tab($dane);
echo "3.1";
print_r($tab_kop);
echo "<br>";

function suma($tab_a, $tab_b) {
    $suma = array();
    for ($i = 0; $i < count($tab_a); $i++) {
        $suma[$i] = $tab_a[$i] + $tab_b[$i];
    }
    return $suma;
}

$tab_sum = suma($dane, $tab_kop);
echo "3.2";
print_r($tab_sum);
echo "<br>";

function odwrotna_kolejnosc($zrodlo) {
    $odwrocona = array();
    $dlugosc = count($zrodlo);
    for ($i = 0; $i < $dlugosc; $i++) {
        $odwrocona[$i] = $zrodlo[$dlugosc - 1 - $i];
    }
    return $odwrocona;
}

$tab_kop = odwrotna_kolejnosc($dane);
echo "3.3";
print_r($tab_kop);
echo "<br>";

function oblicz_sr($tab) {
    $suma = 0;
    for ($i = 0; $i < count($tab); $i++) {
        $suma += $tab[$i];
    }
    return $suma / count($tab);
}

echo "4.1" . oblicz_sr($dane) . "<br>";
print_r($dane);
echo "<br>";

function znajdz_max($tab) {
    $max = $tab[0];
    for ($i = 1; $i < count($tab); $i++) {
        if ($tab[$i] > $max) {
            $max = $tab[$i];
        }
    }
    return $max;
}

echo "4.2<br>" . znajdz_max($tab_sum) . "<br>";
print_r($tab_sum);
echo "<br>";

?>
