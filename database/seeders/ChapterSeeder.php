<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            [
                'c_name'=>'Hair Cuts',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Long Hair',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Short Hair',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Medium Hair',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Hair Edges',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Extension',
                'm_id'=>'1'
            ],
            [
                'c_name'=>'Long Hair',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Short Hair',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Medium Hair',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'One Color',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Highlighter Dye',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Dye The Edges',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Highlight',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Lowlight',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Mach',
                'm_id'=>'2'
            ],
            [
                'c_name'=>'Bridal Hairstyle',
                'm_id'=>'3'
            ],
            [
                'c_name'=>'High Hairstyle',
                'm_id'=>'3'
            ],
            [
                'c_name'=>'Simple Hairstyle',
                'm_id'=>'3'
            ],
            [
                'c_name'=>'Long Hair',
                'm_id'=>'4'
            ],
            [
                'c_name'=>'Short Hair',
                'm_id'=>'4'
            ],
            [
                'c_name'=>'Medium Hair',
                'm_id'=>'4'
            ]
        ]);
    }
}
