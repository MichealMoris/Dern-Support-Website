<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["categoryName"=>"Electronics"],
            ["categoryName"=>"Home Appliances"],
            ["categoryName"=>"Vehicles"],
            ["categoryName"=>"Other"],
        ];

        foreach ($categories as  $category) {
            ServiceCategory::create($category);
        }

    }
}
