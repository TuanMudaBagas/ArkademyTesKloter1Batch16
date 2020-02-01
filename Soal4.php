<?php

class Soal4
{
    function hitung_vocal($kata, $hurufBaru)
    {
        $vokal = ['a', 'i', 'u', 'e', 'o'];
        return str_replace($vokal, $hurufBaru, $kata);
    }
}


$soal4 = new Soal4;

echo $soal4->hitung_vocal('Orang Jahat Adalah Orang Baik Yang Tersakiti', 'i');
