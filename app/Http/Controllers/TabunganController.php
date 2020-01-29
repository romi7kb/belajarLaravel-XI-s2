<?php

namespace App\Http\Controllers;
use App\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()    
    {
        $data = Tabungan::all();
        return $data; 
    }
    public function show($id)
    {
        $data = Tabungan::findOrFail($id);
        return $data; 
    }
    public function store($nis,$nama,$kelas,$jml)
    {
        $data = new Tabungan();
        $data->nis = $nis;
        $data->nama = $nama;
        $data->kelas = $kelas;
        $data->jml = $jml;
        $data->save();
        return $data;
       
    }
    public function edit($id,$nis,$nama,$kelas,$jml)
    {
        $data = Tabungan::find($id);
        $data->nis = $nis;
        $data->nama = $nama;
        $data->kelas = $kelas;
        $data->jml = $jml;
        $data->save();
        return $data;
       
    }
    public function delete($id)
    {
        $data = Tabungan::find($id);
        $data->delete();
    }
}
