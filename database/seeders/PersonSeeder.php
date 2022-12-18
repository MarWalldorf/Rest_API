<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use Faker\factory;
use Illuminate\Support\Facades\DB;
class PersonSeeder extends Seeder
{
    public function run():void
    {
        DB::table('person')->delete();
        $faker=Factory::create();
        for($i=0;$i<50;$i++) {
            Person::create([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'phone_num' => $faker->e164PhoneNumber(),
                'street' => $faker->streetAddress(),
                'city' => $faker->city(),
                'age' => $faker->numberBetween(0, 100),


            ]);
        }
    }
}
