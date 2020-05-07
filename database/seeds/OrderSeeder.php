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
        DB::table('orders')->insert([
            'paid' => '5.00',
        ]);
/*        DB::table('users')->insert([
            'id' => '8',
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => '12345678'
        ]);*/
    }
}
