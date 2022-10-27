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
        $this->call(UsersTableSeeder::class);
        $this->call(TelephonesTableSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(ParkingSpotSeeder::class);
        $this->call(RightsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
    }
}
