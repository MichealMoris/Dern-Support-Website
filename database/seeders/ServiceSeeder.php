<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ["serviceName"=> "Laptop Maintenance", "serviceDescription"=> "Maintenance for Laptops and Spare Parts are Available!", "servicePrice"=> "1500L.E", "categoryID"=> 1],
            ["serviceName"=> "TV Maintenance", "serviceDescription"=> "Maintenance for TVs and Spare Parts are Available!", "servicePrice"=> "500L.E", "categoryID"=> 2],
            ["serviceName"=> "Car Maintenance", "serviceDescription"=> "Maintenance for Cars and Spare Parts are Available!", "servicePrice"=> "5700L.E", "categoryID"=> 3],
            ["serviceName"=> "Plumping Maintenance", "serviceDescription"=> "Maintenance for Plumping Stuff and Spare Parts are Available!", "servicePrice"=> "250L.E", "categoryID"=> 4],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

    }
}
