<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conditioner;
use App\Models\ConditionerModel;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Conditioner::factory()->has(ConditionerModel::factory()->count(4))->count(30)->create();
    }
}
