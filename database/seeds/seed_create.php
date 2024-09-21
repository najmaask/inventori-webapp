<?php

use Illuminate\Database\Seeder;

class seed_create extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventoriss')->insert([
            'KdInventor'=>'KI002',
            'NamaInventor'=>'Apawe',
            'KdJenis'=>'KJ002',
            'Kondisi'=>'Baik',
            'Jumlah'=>'Apawe',
            'TglRegister'=>'2019-04-02',
            'KdRuang'=>'KR002',
            'Ket'=>'Baik',
            'KdPetugas'=>'KP001'
        ]);
    }
}
