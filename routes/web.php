<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('halo', function () {
    return "Hallo World";
});

Route::get('about', function () {
    return "<h1>hallo</h1>
            <br>Selamat Datang di web saya!";
});
Route::get('about/profil/nama', function () {
    return "Nama Saya Romi";
});
Route::get('about/profil/kelas', function () {
    return "Saya kelas XI RPL 1";
});
Route::get('about/profil/alamat', function () {
    return "Saya tinggal di Terate";
});
Route::get('about/profil/umur', function () {
    return "Umur saya 17 tahun";
});
Route::get('about/profil/teman', function () {
    return "Saya memiliki teman";
});

// Route parameter
Route::get('about/profil/nama/{nama}', function ($a) {
    return "Nama Saya $a";
});
Route::get('about/profil/{nama}/{alamat}/{sekolah}/{umur}', function ($nama, $alamat, $sekolah, $umur) {
    return "Nama Saya $nama <br>saya tinggal di $alamat <br>Saya Bersekolah di $sekolah<br>Umur saya $umur Thn";
});

// Route Optional Parameter
Route::get('nama/{nama?}', function ($a = 'Romi') {
    return "Nama Kamu $a";
});

Route::get('pesan/{nama?}/{minum?}/{harga?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Anda pesan $a";
    }
    if (isset($b)) {
        echo " & $b";
    }
    if (isset($c)) {
        if ($c >= 35000) {
            $size = "Large";
        } elseif ($c >= 25000) {
            $size = "Medium";
        } elseif ($c >= 0) {
            $size = "Small";
        } else {
            return " Harga Tidak Valid";
        }
        echo " Size $size dengan harga $c";
    }
    if (!$a && !$b) {
        return "Silahkan Pesan dulu";
    }

});
Route::get('tes-tni/{nama?}/{bb?}/{umur?}', function ($a = null, $b = null, $c = null) {
    if (isset($a)) {
        echo "Nama Anda $a";
    }
    if (isset($b)) {
        if ($b >= 76 && $b <= 100) {
            $size = "Anda Harus turun Berat badan";
        } elseif ($b >= 65 && $b < 76) {
            $size = "Berat Badan Anda Ideal";
        } elseif ($b >= 50 && $b < 65) {
            $size = "Naikan Berat badan anda ";
        } elseif ($b >= 1 && $b < 50) {
            $size = "Anda kurang Nutrisi";
        } else {
            $size = "Berat badan Tidak Valid";
        }
        echo " $size";
    }
    if (isset($c)) {
        if ($c >= 50 && $c <= 60) {
            $umur = "Jendral";
        } elseif ($c >= 40 && $c < 50) {
            $umur = "Laksamana";
        } elseif ($c >= 30 && $c < 40) {
            $umur = "Perwira";
        } else {
            $umur = " umur Tidak Valid";
        }
        echo " $umur ";
    }
    if (!$a && !$b) {
        return "Silahkan Isi data terlebih dahulu";
    }

});
// model Post
Route::get('/testmodel', function() {
    $query = App\Post::all();
    return $query;
    });
Route::get('/testmodel/1', function() {
    $query = App\Post::find(2);
    return $query;
    });
Route::get('/testmodel/2', function() {
    $query = App\Post::where('title','like','%Jodoh%')->get();
    return $query;
    });
Route::get('/testmodel/3', function() {
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});
Route::get('/testmodel/4', function() {
    $post = App\Post::find(1);
    $post->delete();
    });
Route::get('/testmodel/5', function() {
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
// check record baru di database
    });

// model students
Route::get('/testmodel-siswa', function() {
        $query = App\Student::all();
        return $query;
});
// Model books
Route::get('data-buku/ambil3', function ()
{
    $data = App\Book::all()
    ->take(3);
    return $data;
});
Route::get('data-buku/select', function ()
{
    $data = App\Book::select('judul','pengarang','penerbit')->first();
    return $data;
});
Route::get('data-buku/tambahbuku/{judul}/{pengarang}/{penerbit}/{tahunTerbit}/{kategori}/{harga}/{jumlahhalaman}', function($judul,$pengarang,$penerbit,$tahun,$kategori,$harga,$jumlahhal) {
    $post = new App\Book;
    $post->judul = $judul;
    $post->pengarang = $pengarang;
    $post->penerbit = $penerbit;
    $post->tahun_terbit = $tahun;
    $post->kategori_buku = $kategori;
    $post->harga = $harga;
    $post->jumlah_halaman = $jumlahhal;
    $post->save();
    return $post;
// check record baru di database
    });
    Route::get('latihan','LatihanController@halo');
    Route::get('latihan-tambah/{bil?}/{bil1?}','LatihanController@pertambahan');
    Route::get('latihan-kurang/{bil?}/{bil1?}','LatihanController@pengurangan');
    Route::get('latihan-kali/{bil?}/{bil1?}','LatihanController@perkalian');
    Route::get('latihan-bagi/{bil?}/{bil1?}','LatihanController@pembagian');
    Route::get('latihan-data1','LatihanController@loop');
    Route::get('latihan-data2','LatihanController@loop2');
