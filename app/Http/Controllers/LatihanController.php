<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function halo()
    {
        return "Halo cuy!";
    }
    public function pertambahan($bil = null, $bil1 = null)
    {
        if (!$bil) {
            echo "masukan bilangan pertama dan kedua";
        } elseif (!$bil1) {
            echo "Masukan bilangan ke dua";
        } elseif (isset($bil) && isset($bil)) {
            $jml = $bil + $bil1;
            return "Hasil dari : $bil + $bil1 = $jml";
        }

    }
    public function pengurangan($bil = null, $bil1 = null)
    {
        if (!$bil) {
            echo "masukan bilangan pertama dan kedua";
        } elseif (!$bil1) {
            echo "Masukan bilangan ke dua";
        } elseif (isset($bil) && isset($bil)) {
            $jml = $bil - $bil1;
            return "Hasil dari : $bil - $bil1 = $jml";
        }

    }
    public function perkalian($bil = null, $bil1 = null)
    {
        if (!$bil) {
            echo "masukan bilangan pertama dan kedua";
        } elseif (!$bil1) {
            echo "Masukan bilangan ke dua";
        } elseif (isset($bil) && isset($bil)) {
            $jml = $bil * $bil1;
            return "Hasil dari : $bil * $bil1 = $jml";
        }

    }
    public function pembagian($bil = null, $bil1 = null)
    {
        if (!$bil) {
            echo "masukan bilangan pertama dan kedua";
        } elseif (!$bil1) {
            echo "Masukan bilangan ke dua";
        } elseif (isset($bil) && isset($bil)) {
            $jml = $bil / $bil1;
            return "Hasil dari : $bil / $bil1 = $jml";
        }

    }
    public function loop()
    {
        $data = [['nama' => 'Hari', 'kelas' => 'RPL 1', 'uj' => 10000],
            ['nama' => 'Memet', 'kelas' => 'RPL 2', 'uj' => 50000],
            ['nama' => 'Restu', 'kelas' => 'RPL 3', 'uj' => 30000],
            ['nama' => 'David', 'kelas' => 'RPL 4', 'uj' => 15000],
            ['nama' => 'Lukman', 'kelas' => 'RPL 5', 'uj' => 5000],
        ];

        foreach ($data as $val => $value) {
            if ($value['uj'] >= 50000) {
                $ta = $value['uj'] * 25 / 100;
                $ket = "VIP";
                $total = $value['uj'] - $ta;
            } elseif ($value['uj'] >= 25000) {
                $ta = $value['uj'] * 15 / 100;
                $ket = "Premium";
                $total = $value['uj'] - $ta;
            } elseif ($value['uj'] >= 10000) {
                $ta = $value['uj'] * 10 / 100;
                $ket = "Regular";
                $total = $value['uj'] - $ta;
            } else {
                $ta = 0;
                $ket = "Ekonomi";
                $total = $value['uj'];
            }
            echo "Nama : " . $value['nama'] .
                "<br>Kelas : " . $value['kelas'] .
                "<br>Uang Jajan : " . $total .
                "<br>Uang Tabungan : " . $ta .
                "<br>Total Uang Jajan  : " . $value['uj'] . " => " . $ket .
                "<hr>";
        }
    }
    public function loop2()
    {
        $data = [
            ['nama' => 'Hari', 'agama' => 'Islam', 'alamat' => 'Bandung', 'jenis_kelamin' => 'Laki-laki', 'Jabatan' => 'Manager', 'jam_kerja' => 200],
            ['nama' => 'Memet', 'agama' => 'Kristen', 'alamat' => 'Jakarta', 'jenis_kelamin' => 'Laki-laki', 'Jabatan' => 'Sekretaris', 'jam_kerja' => 100],
            ['nama' => 'Restu', 'agama' => 'Hindu', 'alamat' => 'Bekasi', 'jenis_kelamin' => 'Laki-laki', 'Jabatan' => 'Staff', 'jam_kerja' => 255],

        ];
        foreach ($data as $key => $value) {
            if ($value['Jabatan'] == 'Manager') {
                $Gaji = 5000000;
            } elseif ($value['Jabatan'] == 'Sekretaris') {
                $Gaji = 3500000;
            } elseif ($value['Jabatan'] == 'Staff') {
                $Gaji = 2500000;
            }
            if ($value['jam_kerja'] >= 250) {
                $bonus = $Gaji / 10;
            } elseif ($value['jam_kerja'] >= 200) {
                $bonus = $Gaji * 5 / 100;
            } else {
                $bonus = 0;
            }
            $gaji_bersih = $Gaji + $bonus;
            $potongan = $gaji_bersih * 2.5 / 100;
            $gt = $gaji_bersih - $potongan;

            echo "Nama : " . $value['nama'] .
                "<br>Agama : " . $value['agama'] .
                "<br>Alamat : " . $value['alamat'] .
                "<br>Jenis Kelamin : " . $value['jenis_kelamin'] .
                "<br>Jabatan : " . $value['Jabatan'] .
                "<br>Jam kerja : " . $value['jam_kerja'] .
                "<br>Gaji : " . $Gaji .
                "<br>Bonus : " . $bonus .
                "<br>Potongan : " . $potongan .
                "<br>Gaji Total : " . $gt .
                "<hr>";
        }
    }
}
