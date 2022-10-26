<?php

use Illuminate\Database\Seeder;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            factory(\App\Adresse::class, 20)->create()->all()
        ]);
    }
}
