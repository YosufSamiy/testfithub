<?php

namespace Database\Seeders;

use App\Models\catogres;
use Illuminate\Database\Seeder;

class CatogresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        catogres::factory(50)->create();
    }
}
