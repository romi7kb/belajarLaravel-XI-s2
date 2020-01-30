<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Daftar Orang Hilang</center> <br>
    @foreach($data as $val )
    {{$val['nama']}} <br>
    {{$val['kelas']}}
    <hr>
    @endforeach
</body>

</html>
