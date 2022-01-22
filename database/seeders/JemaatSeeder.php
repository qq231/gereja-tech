<?php

namespace Database\Seeders;

use App\Models\Jemaat;
use Illuminate\Database\Seeder;

class JemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Jemaat::factory(100)->create();
        //
    }
}
