<?php

namespace Database\Seeders;

use illuminate\Database\Console\Seeds\WithoutMode1Events;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            ['id_course'=>21,'course_name'=>'Program Visual','description'=>'PTI'],
            ['id_course'=>22,'course_name'=>'Program Internet','description'=>'PTI'],
            ['id_course'=>23,'course_name'=>'Microteaching','description'=>'PTI']
        ]);
    }
}
