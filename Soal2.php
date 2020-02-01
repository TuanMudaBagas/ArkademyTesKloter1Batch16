<?php

// Cek Apakah Ada data yang di kirim dari Input
class Soal2
{
    public function loginCheck()
    {

        $username = 'aQWESQWS';
        $password = '2?QWE';
        if ($_POST) {
            //Cek Username
            if (preg_match("/^[a-z]{1}[A-Z]{4,7}$/", $username)) {
                // Cek Password
                if (preg_match('/^[0-9]{1}[?,*,_,%][A-Z]{3}/', $password)) {
                    return true;
                } else {
                    // Jika password Tidak Sesuai
                    return false;
                }
            } else {
                // Jika Username Tidak Sesuai
                return false;
            }
        } else {
            // Kalo Tidak ada Kembalikan Ke Halaman Semula
            return false;
        }
    }
}
