<?php

namespace Database\Seeders;
use App\Models\asal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asals')->insert([
            'asal_makanan'=> 'Jepang',
            'belahan_dunia'=> 'Asia Timur',
        ]);

        DB::table('asals')->insert([
            'asal_makanan'=> 'Italia',
            'belahan_dunia'=> 'Eropa Selatan',
        ]);

        asal::factory()->make();
    }
}
