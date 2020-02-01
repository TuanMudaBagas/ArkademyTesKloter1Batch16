<?php

class Soal1
{
    public function tes($nama, $umur)
    {
        $data = [
            'name' => $nama,
            'age' => $umur,
            'is_married' => false,
            'list_school' => [
                [
                    'name' => 'SD AL-ULUM ISLAMIC SCHOOL',
                    'year_in' => '12-Febuari-2006',
                    'year_out' => '24-Maret-2012',
                    'major' => null
                ],
                [
                    'name' => 'SMP NEGERI 9 PEKANBARU',
                    'year_in' => '3-Febuari-2013',
                    'year_out' => '12-Maret-2016',
                    'major' => null
                ],
                [
                    'name' => 'SMK ICB CINTA TEKNIKA',
                    'year_in' => '30-Febuari-2017',
                    'year_out' => '30-April-2020',
                    'major' => null
                ],
            ],
            'skills' => [
                [
                    'skill_name' => 'Front End',
                    'level' => 'Advances'
                ],
                [
                    'skill_name' => 'Back End',
                    'level' => 'Advance'
                ],
            ],
            'interest_in_coding' => true
        ];
        return json_encode($data);
    }
}

$Soal1 = new Soal1;

echo $Soal1->tes('Bagas', 1);
