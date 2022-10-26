<?php

use App\Telephone;
use Illuminate\Database\Seeder;

class TelefonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefons')->insert([
            factory(Telephone::class, 20)->create()->all()
        ]);
    }
}
