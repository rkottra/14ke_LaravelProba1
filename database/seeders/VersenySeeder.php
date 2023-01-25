<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Verseny;

class VersenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('versenyek')->insert(
            [
                'vkod' =>  Str::random(3),
                'vnev' =>  Str::random(18),
            ]);*/
        Verseny::truncate();
        
        Verseny::factory()
            ->count(50)
            ->create();
    }
}
