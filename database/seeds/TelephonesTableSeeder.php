<?php

use App\Telephone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telephones')->insert([
            factory(Telephone::class, 20)->create()->all()
        ]);
    }
}
