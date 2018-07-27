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

        Popularcities::create(['cities' => 'Нью-Йорк',
            'latitude' => '40.7127753',
            'longitude' => '-74.0059728',]);

        Popularcities::create(['cities' => 'Майами',
            'latitude' => '25.7616798',
            'longitude' => '-80.19179020000001',]);

        Popularcities::create(['cities' => 'Москва',
            'latitude' => '55.755826',
            'longitude' => '37.617299900000035',]);

        Popularcities::create(['cities' => 'Лондон',
            'latitude' => '51.5073509',
            'longitude' => '-0.12775829999998223',]);
    }

}