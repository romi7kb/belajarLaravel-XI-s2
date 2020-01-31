<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Daftar Buku </h3>
    @foreach($data as $buku)
    Judul : {{$buku->judul}} <br>
    Pengarang : {{$buku->pengarang}} <br>
    Penerbit : {{$buku->penerbit}} <br>
    Tahun Terbit : {{$buku->tahun_terbit}} <br>
    Kategori Buku : {{$buku->kategori_buku}} <br>
    Harga : {{$buku->harga}} <br>
    Jumlah Halaman : {{$buku->jumlah_halaman}} <br>
    <hr>
    @endforeach
</body>

</html>
