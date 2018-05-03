<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('Products')->insert([
                'Name' => 'Áo khoác mùa hè hà nội ' . rand(1, 100),
                'Price' => rand(1, 100),
                'color' => 'red'

            ]);
        }
    }
}
