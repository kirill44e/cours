<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\AdminUser::factory(1)->create([
        'email' => "admin@mail.ru",
        'password' => bcrypt("admin"),
      ]);
    }
}
