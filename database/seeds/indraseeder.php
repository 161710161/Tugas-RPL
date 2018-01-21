<?php

use Illuminate\Database\Seeder;

class indraseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        ['nis'=>'16171012','nama_siswa'=>'Syaindra','alamat'=>'Babakan','tempat_lahir'=>'Bandung',
        'cita_cita'=>'Mangaka','tanggal_lahir'=>'2000-08-23','hobi'=>'Editor'],
        ['nis'=>'16171012','nama_siswa'=>'Aji','alamat'=>'Nugraha','tempat_lahir'=>'Jawa',
        'cita_cita'=>'Animasi','tanggal_lahir'=>'2000-08-23','hobi'=>'Menggambar'],
        ['nis'=>'16171012','nama_siswa'=>'Pramayuda','alamat'=>'TCI','tempat_lahir'=>'Barat',
        'cita_cita'=>'Animator','tanggal_lahir'=>'2000-08-23','hobi'=>'Melukis']
        ];
        DB::table('indras')->insert($a);
    }
}
