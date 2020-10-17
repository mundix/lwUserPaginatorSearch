<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

use App\Models\Category;

class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        User::factory(30)->create([
            'category_id' => $faker->randomElement(Category::pluck('id'))
        ]);
    }
}
