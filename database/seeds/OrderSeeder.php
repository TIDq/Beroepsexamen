<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'status' => 'afgeleverd',
                'paid' => rand(1, 999),
                'user_id' => '1'
            ]);
        }

        for ($i = 0; $i < 30; $i++) {
            DB::table('order_products')->insert([
                'product_id' => rand(1, 10),
                'order_id' => rand(1, 10)
            ]);
        }
    }
}
