<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class update_custommers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('update_custommers')->insert([
                'id' => 1,
                'name'=>"vinh",
                'gender'=> true,
                'email' => 'vinhdeptrai@gmail.com',
                'address'=>'101B lê hữu trác',
                'phonenumber'=>"0879364221",
                'note'=>"ko"
        ]);
    }
}
