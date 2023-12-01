<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){
            $new_type = new Type();
            $new_type->name = $faker->name();
            $new_type->slug = Type::generateSlug($new_type->name);

            $new_type->save();
        }

    }
}
