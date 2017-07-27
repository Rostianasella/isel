<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a=[
        ['title'=>'tips cepat nikah','content'=>"lorem imsum"],
        ];
        DB::table('siswa')->insert($a);
    }
}
