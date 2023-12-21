<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class PersonTableData extends DatabaseSeeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 200) as $index) {
            DB::table('people')->insert([
                'name'=>$faker->name,
                'surname'=>$faker->lastName,
                'phone'=>rand(111111111,999999999),
                'street'=>$faker->streetAddress,
                'city'=>$faker->city,
                'country'=>$faker->country
            ]);
        }
    }
}
