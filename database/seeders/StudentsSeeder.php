<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name'=>'Hana','id_course'=>1,'age'=>19,'classroom'=>'Kelas A'],
            ['name'=>'Samrotul','id_course'=>2,'age'=>21,'classroom'=>'Kelas B'],
            ['name'=>'Fuadah','id_course'=>3,'age'=>21,'classroom'=>'Kelas A'],
            ['name'=>'Hanoy','id_course'=>4,'age'=>20,'classroom'=>'Kelas A'],
            ['name'=>'Dehan','id_course'=>5,'age'=>18,'classroom'=>'Kelas B']
        ]);
    }
}
