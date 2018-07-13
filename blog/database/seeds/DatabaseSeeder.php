<?php

use Illuminate\Database\Seeder;

use App\Popularcities;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PostsSeeder::class);
    }
}

class PostsSeeder extends Seeder
{

    public function run()
    {

        DB::table('popularcities')->delete();
        Popularcities::create(['cities' => 'Харьков',
            'latitude' => '49.98081',
            'longitude' => '36.25272',]);

        Popularcities::create(['cities' => 'Киев',
            'latitude' => '50.450418',
            'longitude' => '30.523541',]);

        Popularcities::create(['cities' => 'Львов',
            'latitude' => '49.83826',
            'longitude' => '24.02324',]);

        Popularcities::create(['cities' => 'Одесса',
            'latitude' => '46.47747',
            'longitude' => '30.73262',]);


    }

}