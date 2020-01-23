<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama'=>'Lukman suryana', 'nis'=>'0734823472', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'Bojong', 'tgl_lahir'=>'2003-01-20', 'umur'=>16],
            ['nama'=>'Lukman suryana', 'nis'=>'0734823473', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'Bojong', 'tgl_lahir'=>'2003-01-20', 'umur'=>16],
            ['nama'=>'Lukman suryana', 'nis'=>'0734823474', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'Bojong', 'tgl_lahir'=>'2003-01-20', 'umur'=>16],
            ['nama'=>'Lukman suryana', 'nis'=>'0734823475', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'Bojong', 'tgl_lahir'=>'2003-01-20', 'umur'=>16],
            ['nama'=>'Lukman suryana', 'nis'=>'0734823476', 'jenis_kelamin'=>'laki-laki', 'alamat'=>'Bojong', 'tgl_lahir'=>'2003-01-20', 'umur'=>16],
            ];
            // masukkan data ke database
            DB::table('students')->insert($data);
        //
    }
}
