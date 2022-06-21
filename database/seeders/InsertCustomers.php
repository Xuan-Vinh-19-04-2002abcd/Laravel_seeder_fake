<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InsertCustomers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $limit = 20;
        $fake = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('update_custommers')->insert([
                'name' => $fake->name,
                'gender' => true,
                'email' =>$fake->unique->email,
                'address' =>$fake->city,
                'phonenumber' =>$fake->phoneNumber,
                'note' => $fake->sentence,
            ]);
        }
    }
}
