<?php

namespace Database\Seeders;

use App\Models\admin;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            admin::factory(10)->create();
        }
}
