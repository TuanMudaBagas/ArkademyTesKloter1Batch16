<pre>
<?php
class Soal5
{
    public function printSquare($luas)
    {
        for ($i = 0; $i < $luas; $i++) {
            for ($j = 0; $j < $luas; $j++) {
                if ($i == 0 || $i == $luas - 1) {
                    echo (' * ');
                } elseif ($j == 0 || $j == $luas - 1) {
                    echo (' * ');
                } else {
                    echo ('   ');
                }
            }
            echo ("</br>");
        }
    }
}

$soal5 = new Soal5;
// Masukan Luas Persi
$soal5->printSquare(8);
?>
</pre>