<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    //

    public function pertama()
    {
        $angka = 1;

        switch ($angka) {
        }

        for ($angka; $angka <= 100; $angka++) {
            # code...
            // 
            // 
            if (($angka % 3 == 0) && ($angka % 5 == 0)) {
                $luasPersegi = $this->luasPersegi($angka);
                echo "Angka : " . $angka . " => Habis dibagi 3 dan 5 dengan " . "Luas Persegi : " . $luasPersegi . "<br>";
            } else if ($angka % 3 == 0) {
                $luasLingkaran = $this->luasLingkaran($angka);
                echo "Angka : " . $angka . " => Mempunyai luas lingkaran sebesar: " . $luasLingkaran . "<br>";
            } else if ($angka % 5 == 0) {
                $kelilingLingkaran = $this->kelilingLingkaran($angka);
                echo "Angka : " . $angka . " => Dengan keliling lingkaran : " . $kelilingLingkaran . "<br>";
            } else {
                echo "Angka : " . $angka . "<br>";
            }
        }
    }

    public function luasLingkaran(float $angka)
    {
        // angka kelipatan tiga (3)
        $pi = 3.14;
        $jari_jari = $angka * $angka;
        $luasLingkaran = $pi * $jari_jari;

        return $luasLingkaran;
    }

    public function kelilingLingkaran(float $angka)
    {
        $pi = 3.14;
        $jari_jari = $angka / 5;
        $jari = $jari_jari * $jari_jari;
        $kelilingLingkaran = 2 * ($pi * $jari);

        return $kelilingLingkaran;
    }

    public function luasPersegi(float $angka)
    {
        $panjang = $angka / 3;
        $lebar = $angka / 5;
        $luasPersegi = $panjang * $lebar;

        return $luasPersegi;
    }
}
