<?php

use Illuminate\Database\Seeder;

class siswaaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        ['nama'=>'sella','kelas'=>'XII RPL 2','tanggal lahir'=>'1999-02-22'],
        ['nama'=>'rismayanti','kelas'=>'XII RPL 3','tanggal lahir'=>'2000-03-23'],
        ['nama'=>'sherin','kelas'=>'XII RPL 3','tanggal lahir'=>'1999-04-24'],
        ['nama'=>'pahmi','kelas'=>'XII RPL 1','tanggal lahir'=>'1998-05-25'],
        ['nama'=>'indah','kelas'=>'XII RPL 3','tanggal lahir'=>'2000-06-26'],
        ];
        DB::table('siswaa')->insert($a);
    }
}
