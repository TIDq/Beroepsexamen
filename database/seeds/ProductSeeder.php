<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Hemd',
            'price' => '300',
            'delivery' => 'binnen_5-7_werkdagen' ,
        ]);
    }
}
