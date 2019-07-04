<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            $customer = new Customer();
            $customer->name = str_random(10);
            $customer->avatar = "images/1I8v6peoMq5Izq4YdFRggwgZllYwbGxMF9WsxLpk.jpeg";
            $customer->age = mt_rand(1,30);
            $customer->email = str_random(15);
            $customer->address = str_random(18);
            $customer->save();
        }
    }
}
