<?php

class Soal3
{

    public function acakString($param = null)
    {
        $type = gettype($param);
        // Cek Jenis Parameter
        if ($type == string) {
            return str_shuffle($param);
        } else {
            return 'Harus terdapat parameter dan harus string!';
        }
    }
}

$soal3 = new Soal3;

// Masukan Parameter
echo $soal3->acakString('adasd');
