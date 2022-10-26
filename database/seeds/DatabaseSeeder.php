<?php

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
        $this->call(AdresseSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(ParkingSpotSeeder::class);
        $this->call(RightsTableSeeder::class);
        $this->call(TelefonsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
