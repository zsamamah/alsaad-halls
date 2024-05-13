<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('materials')->insert([
      [
        'm_name' => 'Video'
      ],
      [
        'm_name' => 'Images'
      ],
      [
        'm_name' => 'Cake'
      ],
      [
        'm_name' => 'Drinks'
      ],
      [
        'm_name' => 'Inetrior Design'
      ]
    ]);
  }
}
