<?php
///dfdfasfdsa
namespace Database\Seeders;

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
        $this->call([
        GenreSeeder::class,
        UserSeeder::class,
        AuthorSeeder::class,
        ConditionSeeder::class,
        BookSeeder::class,
      ]);
      
        
    }
}
