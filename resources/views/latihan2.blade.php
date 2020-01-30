<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<center>Daftar Tabungan</center> <br>
@foreach($tabungan as $val )
Nis : {{$val->nis}} <br>
Nama : {{$val->nama}} <br>
Kelas : {{$val->kelas}} <br>
Jumlah : {{$val->jml}}
<hr>
@endforeach

<body>

</body>

</html>
