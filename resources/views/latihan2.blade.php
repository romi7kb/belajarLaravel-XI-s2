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
Jumlah : {{$val->jml}} <br>
@if($val->jml>25000)
Paket : "C"
@elseif($val->jml>10000)
Paket : "B"
@elseif($val->jml>=1000)
Paket : "A"
@else
Paket : "NULL"
@endif
<hr>
@endforeach

<body>

</body>

</html>
