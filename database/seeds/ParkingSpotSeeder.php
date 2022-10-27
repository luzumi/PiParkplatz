<?php

use App\ParkingSpot;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkingSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'status', 'section'
        DB::table('parking_spots')->insert([
            factory(ParkingSpot::class, 10)->create()->all()
        ]);
    }
}
