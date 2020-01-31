<?php

namespace App\Http\Controllers;
use App\Tabungan;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $data = "lukman";
        $data2= "<h1>Adidas</h1>";
        return view('latihan',compact('data','data2'));
    }
    public function pass1()
    {
        $siswa = [ 
            ['nama'=>'Lukman', 'kelas'=>'XI RPL'],
            ['nama'=>'Lakmun', 'kelas'=>'X RPL'],
        ];
        return view('latihan1',[
           'data'=>$siswa
        ]);
    }
    public function pass2()
    {
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }
    public function pass3($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        return view('latihan3',compact('tabungan'));
    }
}
