<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();
        return view('buku',compact('data'));
    }
    public function show($id)
    {
        $data = Book::findOrFail($id);
        return view('cari-buku',compact('data'));
    }
}
