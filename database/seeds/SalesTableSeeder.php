<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venta = [
            [
                'customer_id' => 1,
                'user_id' => 1,
                'date_sale' => '2019-10-05',
                'total_sales' => 100,
            ],
            [
                'customer_id' => 2,
                'user_id' => 2,
                'date_sale' => '2019-10-05',
                'total_sales' => 150,
            ],
        ];
        DB::table('sales')->insert($venta);
    }
}
